<?php
require_once 'config.php';
require_once 'php/auth.php';

$auth = new Auth();
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}
$user = $auth->getCurrentUser();
global $LANGUAGES;

// Her dil için detaylı bilgiler
$langDetails = [
    'tr' => [
        'speakers' => '80+ milyon',
        'family' => 'Türk Dilleri',
        'difficulty' => 'Orta',
        'topics' => ['Günlük yaşam', 'Alışveriş', 'Restoran', 'Seyahat'],
        'sample' => 'Merhaba, nasılsınız?',
        'alphabet' => 'Latin (29 harf)',
    ],
    'en' => [
        'speakers' => '1.5 milyar',
        'family' => 'Germen Dilleri',
        'difficulty' => 'Kolay',
        'topics' => ['Daily life', 'Shopping', 'Restaurant', 'Travel'],
        'sample' => 'Hello, how are you?',
        'alphabet' => 'Latin (26 harf)',
    ],
    'de' => [
        'speakers' => '130 milyon',
        'family' => 'Germen Dilleri',
        'difficulty' => 'Orta-Zor',
        'topics' => ['Alltag', 'Einkaufen', 'Restaurant', 'Reisen'],
        'sample' => 'Hallo, wie geht es Ihnen?',
        'alphabet' => 'Latin (30 harf)',
    ],
    'fr' => [
        'speakers' => '320 milyon',
        'family' => 'Roman Dilleri',
        'difficulty' => 'Orta',
        'topics' => ['Vie quotidienne', 'Shopping', 'Restaurant', 'Voyage'],
        'sample' => 'Bonjour, comment allez-vous?',
        'alphabet' => 'Latin (26 harf)',
    ],
    'es' => [
        'speakers' => '580 milyon',
        'family' => 'Roman Dilleri',
        'difficulty' => 'Kolay-Orta',
        'topics' => ['Vida diaria', 'Compras', 'Restaurante', 'Viaje'],
        'sample' => '¡Hola! ¿Cómo estás?',
        'alphabet' => 'Latin (27 harf)',
    ],
    'it' => [
        'speakers' => '85 milyon',
        'family' => 'Roman Dilleri',
        'difficulty' => 'Kolay-Orta',
        'topics' => ['Vita quotidiana', 'Shopping', 'Ristorante', 'Viaggio'],
        'sample' => 'Ciao, come stai?',
        'alphabet' => 'Latin (21 harf)',
    ],
    'ru' => [
        'speakers' => '260 milyon',
        'family' => 'Slav Dilleri',
        'difficulty' => 'Zor',
        'topics' => ['Повседневная жизнь', 'Покупки', 'Ресторан', 'Путешествие'],
        'sample' => 'Здравствуйте, как дела?',
        'alphabet' => 'Kiril (33 harf)',
    ],
    'ar' => [
        'speakers' => '420 milyon',
        'family' => 'Sami Dilleri',
        'difficulty' => 'Zor',
        'topics' => ['الحياة اليومية', 'التسوق', 'المطعم', 'السفر'],
        'sample' => 'مرحباً، كيف حالك؟',
        'alphabet' => 'Arap (28 harf)',
    ],
];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Dil Seçimi</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; box-sizing: border-box; }
        body { margin: 0; -webkit-font-smoothing: antialiased; }
        .card-hover { transition: all 0.3s cubic-bezier(0.4,0,0.2,1); }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 24px 48px -12px rgba(0,0,0,0.15); }
        .lang-grid { display: grid; grid-template-columns: 1fr; gap: 20px; }
        .info-grid { display: grid; grid-template-columns: 1fr; gap: 16px; }
        .features-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }
        .nav-sub { display: none; }
        @media (min-width: 640px) {
            .lang-grid { grid-template-columns: repeat(2, 1fr); }
            .info-grid { grid-template-columns: repeat(2, 1fr); }
            .features-grid { grid-template-columns: repeat(4, 1fr); }
            .nav-sub { display: block; }
        }
        @media (min-width: 1024px) {
            .lang-grid { grid-template-columns: repeat(4, 1fr); }
            .info-grid { grid-template-columns: repeat(3, 1fr); }
        }
        .tag { display: inline-block; padding: 2px 8px; border-radius: 6px; font-size: 11px; font-weight: 500; }
    </style>
</head>
<body style="background:#f8fafc;min-height:100vh;">

    <!-- Navbar -->
    <nav style="background:rgba(255,255,255,0.97);border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:50;">
        <div style="max-width:1200px;margin:0 auto;padding:0 16px;">
            <div style="display:flex;align-items:center;justify-content:space-between;height:60px;">
                <div style="display:flex;align-items:center;gap:12px;">
                    <a href="index.php" style="text-decoration:none;display:flex;align-items:center;gap:8px;">
                        <img src="assets/images/logo-icon-64.png" alt="Logo" style="width:32px;height:32px;">
                        <div>
                            <h1 style="margin:0;font-size:16px;font-weight:700;color:#7c3aed;">MultiTalk</h1>
                            <p class="nav-sub" style="margin:0;font-size:11px;color:#94a3b8;">Diyaloglarla Yabancı Dil Öğretimi</p>
                        </div>
                    </a>
                </div>
                <div style="display:flex;align-items:center;gap:16px;">
                    <div style="display:flex;align-items:center;gap:8px;">
                        <div style="width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:13px;font-weight:700;background:linear-gradient(135deg,#8b5cf6,#d946ef);">
                            <?php echo mb_substr($user['full_name'], 0, 1, 'UTF-8'); ?>
                        </div>
                        <span class="nav-sub" style="color:#334155;font-size:14px;font-weight:500;"><?php echo htmlspecialchars($user['full_name']); ?></span>
                    </div>
                    <a href="lms-logout.php" style="display:inline-flex;align-items:center;gap:6px;padding:8px 16px;background:#fee2e2;color:#dc2626;font-size:14px;font-weight:600;border-radius:10px;text-decoration:none;">
                        <i class="mdi mdi-logout" style="font-size:18px;"></i><span>Çıkış</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Header -->
    <div style="background:linear-gradient(135deg,#7c3aed,#9333ea,#c026d3);padding:48px 16px;text-align:center;position:relative;overflow:hidden;">
        <div style="position:absolute;inset:0;">
            <div style="position:absolute;top:0;left:0;width:200px;height:200px;border-radius:50%;background:rgba(255,255,255,0.05);transform:translate(-50%,-50%);"></div>
            <div style="position:absolute;bottom:0;right:0;width:300px;height:300px;border-radius:50%;background:rgba(255,255,255,0.05);transform:translate(30%,30%);"></div>
        </div>
        <div style="position:relative;z-index:10;max-width:700px;margin:0 auto;">
            <h1 style="margin:0 0 12px;font-size:clamp(28px,5vw,44px);font-weight:800;color:#fff;letter-spacing:-0.03em;">
                Hangi Dili Öğrenmek İstersiniz?
            </h1>
            <p style="margin:0;color:#ede9fe;font-size:clamp(14px,2vw,18px);line-height:1.6;">
                8 farklı dilde hazırlanmış günlük yaşam diyaloglarıyla öğrenmeye başlayın.<br>
                CEFR A1 ve A2 seviyelerine uygun video içerikler sizi bekliyor.
            </p>
        </div>
    </div>

    <div style="max-width:1200px;margin:0 auto;padding:32px 16px;">

        <!-- Dil Kartları -->
        <div class="lang-grid" style="margin-bottom:48px;">
            <?php foreach ($LANGUAGES as $code => $lang):
                $detail = $langDetails[$code];
                $diffColor = match($detail['difficulty']) {
                    'Kolay' => '#16a34a',
                    'Kolay-Orta' => '#65a30d',
                    'Orta' => '#ca8a04',
                    'Orta-Zor' => '#ea580c',
                    'Zor' => '#dc2626',
                    default => '#64748b'
                };
                $diffBg = match($detail['difficulty']) {
                    'Kolay' => '#dcfce7',
                    'Kolay-Orta' => '#ecfccb',
                    'Orta' => '#fef9c3',
                    'Orta-Zor' => '#ffedd5',
                    'Zor' => '#fee2e2',
                    default => '#f1f5f9'
                };
            ?>
            <div class="card-hover" style="background:#fff;border-radius:20px;box-shadow:0 4px 16px rgba(0,0,0,0.06);overflow:hidden;border:1px solid #f1f5f9;">
                <!-- Üst kısım -->
                <div style="padding:24px 20px 16px;text-align:center;">
                    <div style="font-size:56px;margin-bottom:12px;"><?php echo $lang['flag']; ?></div>
                    <h3 style="margin:0 0 4px;font-size:22px;font-weight:700;color:#0f172a;"><?php echo $lang['name']; ?></h3>
                    <p style="margin:0 0 12px;font-size:13px;color:#94a3b8;"><?php echo $lang['name_en']; ?></p>

                    <!-- Zorluk + Konuşan -->
                    <div style="display:flex;justify-content:center;gap:8px;margin-bottom:12px;flex-wrap:wrap;">
                        <span class="tag" style="background:<?php echo $diffBg; ?>;color:<?php echo $diffColor; ?>;">
                            <?php echo $detail['difficulty']; ?>
                        </span>
                        <span class="tag" style="background:#f1f5f9;color:#64748b;">
                            <i class="mdi mdi-account-group" style="font-size:12px;"></i> <?php echo $detail['speakers']; ?>
                        </span>
                    </div>

                    <!-- Örnek cümle -->
                    <div style="background:#f8fafc;border-radius:10px;padding:10px 14px;margin-bottom:12px;border:1px solid #f1f5f9;">
                        <p style="margin:0;font-size:12px;color:#94a3b8;margin-bottom:4px;">Örnek cümle:</p>
                        <p style="margin:0;font-size:14px;font-weight:600;color:#334155;font-style:italic;">"<?php echo $detail['sample']; ?>"</p>
                    </div>

                    <!-- Bilgiler -->
                    <div style="display:flex;justify-content:space-between;font-size:12px;color:#64748b;margin-bottom:4px;">
                        <span><i class="mdi mdi-translate" style="color:#7c3aed;"></i> <?php echo $detail['family']; ?></span>
                        <span><i class="mdi mdi-alphabetical" style="color:#7c3aed;"></i> <?php echo $detail['alphabet']; ?></span>
                    </div>
                </div>

                <!-- Alt kısım - Konular + Buton -->
                <div style="padding:0 20px 20px;">
                    <div style="display:flex;flex-wrap:wrap;gap:4px;margin-bottom:16px;">
                        <?php foreach ($detail['topics'] as $topic): ?>
                        <span style="font-size:11px;padding:3px 8px;border-radius:6px;background:#ede9fe;color:#7c3aed;font-weight:500;">
                            <?php echo $topic; ?>
                        </span>
                        <?php endforeach; ?>
                    </div>

                    <div style="display:flex;gap:8px;">
                        <a href="lms-dashboard.php?lang=<?php echo $code; ?>"
                           style="flex:1;display:flex;align-items:center;justify-content:center;gap:6px;padding:12px;background:linear-gradient(135deg,#7c3aed,#9333ea);color:#fff;font-weight:600;font-size:14px;border-radius:12px;text-decoration:none;transition:opacity 0.2s;"
                           onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                            <i class="mdi mdi-play-circle"></i> Başla
                        </a>
                        <span style="display:flex;align-items:center;justify-content:center;width:44px;background:#f1f5f9;border-radius:12px;font-size:16px;color:#64748b;">
                            <i class="mdi mdi-video-outline"></i>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Özellikler -->
        <div class="features-grid" style="margin-bottom:48px;">
            <div style="background:#fff;border-radius:16px;padding:24px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.04);border:1px solid #f1f5f9;">
                <div style="width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;background:#ede9fe;">
                    <i class="mdi mdi-certificate" style="font-size:28px;color:#7c3aed;"></i>
                </div>
                <h3 style="margin:0 0 4px;font-size:15px;font-weight:700;color:#0f172a;">CEFR Uyumlu</h3>
                <p style="margin:0;font-size:13px;color:#64748b;">A1-A2 seviye içerikler</p>
            </div>
            <div style="background:#fff;border-radius:16px;padding:24px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.04);border:1px solid #f1f5f9;">
                <div style="width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;background:#fce7f3;">
                    <i class="mdi mdi-animation-play" style="font-size:28px;color:#db2777;"></i>
                </div>
                <h3 style="margin:0 0 4px;font-size:15px;font-weight:700;color:#0f172a;">Video Diyaloglar</h3>
                <p style="margin:0;font-size:13px;color:#64748b;">Görsel destekli içerikler</p>
            </div>
            <div style="background:#fff;border-radius:16px;padding:24px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.04);border:1px solid #f1f5f9;">
                <div style="width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;background:#dcfce7;">
                    <i class="mdi mdi-subtitles" style="font-size:28px;color:#16a34a;"></i>
                </div>
                <h3 style="margin:0 0 4px;font-size:15px;font-weight:700;color:#0f172a;">Altyazı Desteği</h3>
                <p style="margin:0;font-size:13px;color:#64748b;">Tüm videolarda altyazı</p>
            </div>
            <div style="background:#fff;border-radius:16px;padding:24px;text-align:center;box-shadow:0 2px 8px rgba(0,0,0,0.04);border:1px solid #f1f5f9;">
                <div style="width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;background:#fef9c3;">
                    <i class="mdi mdi-trophy-award" style="font-size:28px;color:#ca8a04;"></i>
                </div>
                <h3 style="margin:0 0 4px;font-size:15px;font-weight:700;color:#0f172a;">Sertifika</h3>
                <p style="margin:0;font-size:13px;color:#64748b;">Tamamlayınca belge alın</p>
            </div>
        </div>

        <!-- Dil Bilgileri Tablosu -->
        <div style="background:#fff;border-radius:20px;box-shadow:0 4px 16px rgba(0,0,0,0.06);overflow:hidden;margin-bottom:48px;border:1px solid #f1f5f9;">
            <div style="padding:24px 24px 16px;">
                <h2 style="margin:0 0 4px;font-size:22px;font-weight:800;color:#0f172a;">📊 Dil Karşılaştırma</h2>
                <p style="margin:0;font-size:14px;color:#64748b;">Tüm dillerin detaylı bilgileri</p>
            </div>
            <div style="overflow-x:auto;">
                <table style="width:100%;border-collapse:collapse;font-size:14px;">
                    <thead>
                        <tr style="background:#f8fafc;">
                            <th style="padding:12px 16px;text-align:left;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;letter-spacing:0.05em;">Dil</th>
                            <th style="padding:12px 16px;text-align:left;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;">Konuşan</th>
                            <th style="padding:12px 16px;text-align:left;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;">Dil Ailesi</th>
                            <th style="padding:12px 16px;text-align:left;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;">Alfabe</th>
                            <th style="padding:12px 16px;text-align:left;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;">Zorluk</th>
                            <th style="padding:12px 16px;text-align:center;font-weight:600;color:#64748b;font-size:12px;text-transform:uppercase;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($LANGUAGES as $code => $lang):
                            $d = $langDetails[$code];
                            $dc = match($d['difficulty']) { 'Kolay'=>'#16a34a','Kolay-Orta'=>'#65a30d','Orta'=>'#ca8a04','Orta-Zor'=>'#ea580c','Zor'=>'#dc2626',default=>'#64748b' };
                            $db = match($d['difficulty']) { 'Kolay'=>'#dcfce7','Kolay-Orta'=>'#ecfccb','Orta'=>'#fef9c3','Orta-Zor'=>'#ffedd5','Zor'=>'#fee2e2',default=>'#f1f5f9' };
                        ?>
                        <tr style="border-top:1px solid #f1f5f9;">
                            <td style="padding:14px 16px;">
                                <div style="display:flex;align-items:center;gap:10px;">
                                    <span style="font-size:24px;"><?php echo $lang['flag']; ?></span>
                                    <div>
                                        <div style="font-weight:600;color:#0f172a;"><?php echo $lang['name']; ?></div>
                                        <div style="font-size:12px;color:#94a3b8;"><?php echo $lang['name_en']; ?></div>
                                    </div>
                                </div>
                            </td>
                            <td style="padding:14px 16px;color:#334155;"><?php echo $d['speakers']; ?></td>
                            <td style="padding:14px 16px;color:#334155;"><?php echo $d['family']; ?></td>
                            <td style="padding:14px 16px;color:#334155;"><?php echo $d['alphabet']; ?></td>
                            <td style="padding:14px 16px;">
                                <span class="tag" style="background:<?php echo $db; ?>;color:<?php echo $dc; ?>;"><?php echo $d['difficulty']; ?></span>
                            </td>
                            <td style="padding:14px 16px;text-align:center;">
                                <a href="lms-dashboard.php?lang=<?php echo $code; ?>" style="color:#7c3aed;font-weight:600;font-size:13px;text-decoration:none;">
                                    Başla <i class="mdi mdi-arrow-right"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <div style="border-top:1px solid #e2e8f0;padding:24px 0;text-align:center;">
            <p style="margin:0;color:#94a3b8;font-size:14px;">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tüm hakları saklıdır.</p>
        </div>
    </div>
</body>
</html>
