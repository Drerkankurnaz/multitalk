<?php
/**
 * Diyaloglar dosyasını parse edip veritabanına yazan script
 * diyaloglar dosyasındaki gerçek diyalog metinlerini videos tablosuna ekler
 */
require_once __DIR__ . '/config.php';

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER, DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"]
    );
    echo "DB baglantisi OK\n";
} catch (PDOException $e) {
    die("DB Hatasi: " . $e->getMessage() . "\n");
}

// Video ID mapping: [language][order_number] = id
$ids = [
    'en' => [2=>11,3=>12,4=>13,5=>14,6=>15,7=>16,8=>17,9=>18,10=>74,11=>82,12=>90,13=>98,14=>106,15=>114],
    'de' => [2=>20,3=>21,4=>22,5=>23,6=>24,7=>25,8=>26,9=>27,10=>75,11=>83,12=>91,13=>99,14=>107,15=>115],
    'fr' => [2=>29,3=>30,4=>31,5=>32,6=>33,7=>34,8=>35,9=>36,10=>76,11=>84,12=>92,13=>100,14=>108,15=>116],
    'it' => [2=>47,3=>48,4=>49,5=>50,6=>51,7=>52,8=>53,9=>54,10=>78,11=>86,12=>94,13=>102,14=>110,15=>118],
    'es' => [2=>38,3=>39,4=>40,5=>41,6=>42,7=>43,8=>44,9=>45,10=>77,11=>85,12=>93,13=>101,14=>109,15=>117],
    'ru' => [2=>56,3=>57,4=>58,5=>59,6=>60,7=>61,8=>62,9=>63,10=>79,11=>87,12=>95,13=>103,14=>111,15=>119],
    'ar' => [2=>65,3=>66,4=>67,5=>68,6=>69,7=>70,8=>71,9=>72,10=>80,11=>88,12=>96,13=>104,14=>112,15=>120],
    'tr' => [2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>73,11=>81,12=>89,13=>97,14=>105,15=>113],
];

// Tema -> order_number mapping
$temaOrder = [
    'YOLDA' => 2, 'TELEFONDA' => 3, 'ÜNİVERSİTEDE' => 4,
    'SÜPERMARKETTE' => 5, 'EVDE' => 6, 'RESTORANDA' => 7,
    'MAĞAZADA' => 8, 'GARDA' => 9, 'OTELDE' => 10,
    'ŞEHİRDE' => 11, 'DÜĞÜNDE' => 12, 'HASTANEDE' => 13,
    'ECZANEDE' => 14, 'BANKADA' => 15
];

// Dil bölüm başlıkları (dosyadaki EK başlıkları)
$langSections = [
    'İngilizce' => 'en',
    'Almanca' => 'de',
    'Fransızca' => 'fr',
    'İtalyanca' => 'it',
    'İspanyolca' => 'es',
    'Rusça' => 'ru',
    'Arapça' => 'ar',
];


// Dosyayı oku
$content = file_get_contents(__DIR__ . '/diyaloglar');
if (!$content) {
    die("diyaloglar dosyasi okunamadi!\n");
}

// Dil bölümlerine ayır
$currentLang = null;
$currentTema = null;
$dialogues = []; // [lang][order_number] = text
$buffer = '';
$inDialogue = false;

$lines = explode("\n", $content);
$totalLines = count($lines);
echo "Toplam satir: $totalLines\n";

for ($i = 0; $i < $totalLines; $i++) {
    $line = $lines[$i];
    $trimmed = trim($line);

    // Dil bölümü tespiti
    foreach ($langSections as $langName => $langCode) {
        if (mb_strpos($trimmed, $langName) !== false &&
            mb_strpos($trimmed, 'Tematik Diyalog') !== false) {
            $currentLang = $langCode;
            $currentTema = null;
            $buffer = '';
            $inDialogue = false;
            break;
        }
    }

    // İlk bölüm (İngilizce) için özel kontrol
    if ($currentLang === null &&
        mb_strpos($trimmed, 'İngilizce') !== false &&
        mb_strpos($trimmed, 'Tematik') !== false) {
        $currentLang = 'en';
        continue;
    }

    if ($currentLang === null) continue;


    // TEMA satırı tespiti
    if ($trimmed === 'TEMA') {
        // Önceki diyalogu kaydet
        if ($currentTema !== null && trim($buffer) !== '' && trim($buffer) !== 'c') {
            $orderNum = $temaOrder[$currentTema] ?? null;
            if ($orderNum !== null) {
                $dialogues[$currentLang][$orderNum] = trim($buffer);
            }
        }
        $buffer = '';
        $inDialogue = false;

        // Sonraki satırlarda tema adını bul
        for ($j = $i + 1; $j < min($i + 4, $totalLines); $j++) {
            $nextLine = trim($lines[$j]);
            if ($nextLine === '' || $nextLine === 'TEMA') continue;
            // Tema adını kontrol et
            foreach ($temaOrder as $temaName => $order) {
                if (mb_strtoupper($nextLine) === $temaName ||
                    mb_strpos(mb_strtoupper($nextLine), $temaName) !== false) {
                    $currentTema = $temaName;
                    $i = $j; // Bu satırı atla
                    break 2;
                }
            }
        }
        continue;
    }


    // Diyalog içeriği toplama
    if ($currentTema !== null) {
        // Tab ile başlayan satır = diyalog başlangıcı
        if (mb_substr($line, 0, 1) === "\t" && !$inDialogue) {
            $inDialogue = true;
            $text = trim($line);
            if ($text !== '' && $text !== 'c') {
                $buffer .= $text . "\n";
            }
        } elseif ($inDialogue) {
            // EK- ile başlayan satır = yeni dil bölümü
            if (preg_match('/^\\s*EK-\\d/', $trimmed)) {
                // Önceki diyalogu kaydet
                if (trim($buffer) !== '' && trim($buffer) !== 'c') {
                    $orderNum = $temaOrder[$currentTema] ?? null;
                    if ($orderNum !== null) {
                        $dialogues[$currentLang][$orderNum] = trim($buffer);
                    }
                }
                $buffer = '';
                $currentTema = null;
                $inDialogue = false;
                continue;
            }
            // Boş satır veya TEMA = diyalog sonu olabilir
            if ($trimmed === 'TEMA') {
                continue; // for döngüsü TEMA'yı yakalayacak
            }
            if ($trimmed !== '') {
                $buffer .= $trimmed . "\n";
            }
        }
    }
}

// Son diyalogu kaydet
if ($currentTema !== null && trim($buffer) !== '' && trim($buffer) !== 'c') {
    $orderNum = $temaOrder[$currentTema] ?? null;
    if ($orderNum !== null) {
        $dialogues[$currentLang][$orderNum] = trim($buffer);
    }
}


// Fransızca Evde bölümü aslında İtalyanca metin içeriyor (kaynak dosyada hata)
// Bu yüzden FR Evde'yi İtalyanca Evde ile aynı yapıyoruz ama Fransızca olarak
// Dosyada FR Evde = IT metni, IT Evde = doğru IT metni
// FR Evde'yi siliyoruz (hatalı), yerine doğru FR metni yok
// NOT: Kullanıcı bunu bildiği için FR Evde boş kalacak

// Parse sonuçlarını göster
echo "\n=== PARSE SONUCLARI ===\n";
$totalFound = 0;
foreach ($dialogues as $lang => $topics) {
    echo "\n$lang: " . count($topics) . " konu\n";
    foreach ($topics as $order => $text) {
        $preview = mb_substr($text, 0, 60);
        $preview = str_replace("\n", " | ", $preview);
        echo "  order=$order: " . mb_strlen($text) . " karakter - $preview...\n";
        $totalFound++;
    }
}
echo "\nToplam: $totalFound diyalog bulundu\n";

// Veritabanına yaz
echo "\n=== VERITABANINA YAZILIYOR ===\n";
$stmt = $pdo->prepare("UPDATE videos SET subtitle_text = ? WHERE id = ?");
$updated = 0;
$skipped = 0;

foreach ($dialogues as $lang => $topics) {
    foreach ($topics as $orderNum => $text) {
        $videoId = $ids[$lang][$orderNum] ?? null;
        if ($videoId === null) {
            echo "UYARI: $lang order=$orderNum icin video ID bulunamadi\n";
            $skipped++;
            continue;
        }
        try {
            $stmt->execute([$text, $videoId]);
            $updated++;
            echo "OK: $lang order=$orderNum (id=$videoId) - " . mb_strlen($text) . " karakter\n";
        } catch (PDOException $e) {
            echo "HATA: $lang order=$orderNum (id=$videoId) - " . $e->getMessage() . "\n";
            $skipped++;
        }
    }
}

echo "\n=== SONUC ===\n";
echo "Guncellenen: $updated\n";
echo "Atlanan: $skipped\n";
echo "Bitti!\n";
