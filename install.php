<?php
require_once 'config.php';

$success = [];
$errors = [];

try {
    // Veritabanı bağlantısı
    $conn = new PDO(
        "mysql:host=" . DB_HOST . ";charset=utf8mb4",
        DB_USER,
        DB_PASS
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Veritabanını oluştur
    $conn->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $success[] = "Veritabanı oluşturuldu: " . DB_NAME;
    
    // Veritabanını seç
    $conn->exec("USE " . DB_NAME);
    
    // Tabloları oluştur
    $sql = file_get_contents('database.sql');
    $statements = array_filter(array_map('trim', explode(';', $sql)));
    
    foreach ($statements as $statement) {
        if (!empty($statement) && !preg_match('/^(CREATE DATABASE|USE)/i', $statement)) {
            $conn->exec($statement);
        }
    }
    
    $success[] = "Tüm tablolar başarıyla oluşturuldu";
    $success[] = "Örnek video verileri eklendi";
    
} catch(PDOException $e) {
    $errors[] = "Hata: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Kurulum</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-2xl">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <i class="mdi mdi-cog text-6xl text-violet-600 mb-4"></i>
                <h1 class="text-3xl font-bold text-slate-900 mb-2">LMS Kurulum</h1>
                <p class="text-slate-600">Veritabanı kurulum sonuçları</p>
            </div>

            <?php if (!empty($success)): ?>
            <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-6">
                <h3 class="text-green-900 font-semibold mb-3 flex items-center">
                    <i class="mdi mdi-check-circle text-2xl mr-2"></i>
                    Başarılı İşlemler
                </h3>
                <ul class="space-y-2">
                    <?php foreach ($success as $msg): ?>
                    <li class="text-green-700 flex items-start">
                        <i class="mdi mdi-check mr-2 mt-1"></i>
                        <span><?php echo htmlspecialchars($msg); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
            <div class="bg-red-50 border border-red-200 rounded-lg p-6 mb-6">
                <h3 class="text-red-900 font-semibold mb-3 flex items-center">
                    <i class="mdi mdi-alert-circle text-2xl mr-2"></i>
                    Hatalar
                </h3>
                <ul class="space-y-2">
                    <?php foreach ($errors as $error): ?>
                    <li class="text-red-700 flex items-start">
                        <i class="mdi mdi-close mr-2 mt-1"></i>
                        <span><?php echo htmlspecialchars($error); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if (empty($errors)): ?>
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-6">
                <h3 class="text-blue-900 font-semibold mb-3">Sonraki Adımlar</h3>
                <ol class="list-decimal list-inside space-y-2 text-blue-800">
                    <li>Kayıt sayfasından yeni bir hesap oluşturun</li>
                    <li>Giriş yapın ve videoları izlemeye başlayın</li>
                    <li>Tüm videoları tamamlayarak sertifikanızı alın</li>
                </ol>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="lms-register.php" 
                   class="flex-1 bg-violet-600 hover:bg-violet-700 text-white text-center font-medium py-3 rounded-lg transition">
                    <i class="mdi mdi-account-plus"></i> Kayıt Ol
                </a>
                <a href="login.php" 
                   class="flex-1 bg-slate-600 hover:bg-slate-700 text-white text-center font-medium py-3 rounded-lg transition">
                    <i class="mdi mdi-login"></i> Giriş Yap
                </a>
            </div>
            <?php else: ?>
            <div class="text-center">
                <button onclick="location.reload()" 
                        class="bg-violet-600 hover:bg-violet-700 text-white font-medium px-8 py-3 rounded-lg transition">
                    <i class="mdi mdi-refresh"></i> Tekrar Dene
                </button>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-6 text-center text-slate-600 text-sm">
            <p>Kurulum tamamlandıktan sonra bu dosyayı (install.php) silebilirsiniz.</p>
        </div>
    </div>
</body>
</html>
