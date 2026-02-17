<?php
require_once 'config.php';

// Hata raporlamayı aç
error_reporting(E_ALL);
ini_set('display_errors', 1);

$results = [];
$errors = [];

// 1. Veritabanı bağlantısını test et
try {
    $conn = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $results[] = "✅ Veritabanı bağlantısı başarılı";
} catch(PDOException $e) {
    $errors[] = "❌ Veritabanı bağlantı hatası: " . $e->getMessage();
    $errors[] = "💡 Çözüm: install.php sayfasını çalıştırın";
}

// 2. Tabloları kontrol et
if (isset($conn)) {
    try {
        $tables = ['users', 'videos', 'video_progress', 'certificates'];
        foreach ($tables as $table) {
            $stmt = $conn->query("SHOW TABLES LIKE '$table'");
            if ($stmt->rowCount() > 0) {
                $results[] = "✅ Tablo mevcut: $table";
            } else {
                $errors[] = "❌ Tablo bulunamadı: $table";
            }
        }
    } catch(PDOException $e) {
        $errors[] = "❌ Tablo kontrolü hatası: " . $e->getMessage();
    }
}

// 3. Kullanıcıları kontrol et
if (isset($conn)) {
    try {
        $stmt = $conn->query("SELECT COUNT(*) as count FROM users");
        $count = $stmt->fetch()['count'];
        $results[] = "✅ Toplam kullanıcı sayısı: $count";
        
        if ($count == 0) {
            $errors[] = "⚠️ Hiç kullanıcı yok! Test kullanıcıları oluşturulacak...";
        }
    } catch(PDOException $e) {
        $errors[] = "❌ Kullanıcı kontrolü hatası: " . $e->getMessage();
    }
}

// 4. Test kullanıcılarını oluştur
if (isset($conn)) {
    $test_users = [
        ['email' => 'demo@test.com', 'password' => '123456', 'name' => 'Demo Kullanıcı'],
        ['email' => 'student1@lms.com', 'password' => 'student123', 'name' => 'Ahmet Yılmaz'],
        ['email' => 'student2@lms.com', 'password' => 'student123', 'name' => 'Ayşe Demir'],
        ['email' => 'student3@lms.com', 'password' => 'student123', 'name' => 'Mehmet Kaya'],
        ['email' => 'graduate@lms.com', 'password' => 'student123', 'name' => 'Fatma Şahin'],
        ['email' => 'test@lms.com', 'password' => 'test123', 'name' => 'Test Kullanıcı'],
        ['email' => 'admin@lms.com', 'password' => 'admin123', 'name' => 'Admin'],
    ];
    
    foreach ($test_users as $user) {
        try {
            // Kullanıcı var mı kontrol et
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$user['email']]);
            
            if ($stmt->rowCount() == 0) {
                // Kullanıcı yoksa oluştur
                $hashed = password_hash($user['password'], PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users (email, password, full_name) VALUES (?, ?, ?)");
                $stmt->execute([$user['email'], $hashed, $user['name']]);
                $results[] = "✅ Kullanıcı oluşturuldu: {$user['email']} (Şifre: {$user['password']})";
            } else {
                $results[] = "ℹ️ Kullanıcı zaten mevcut: {$user['email']}";
            }
        } catch(PDOException $e) {
            $errors[] = "❌ Kullanıcı oluşturma hatası ({$user['email']}): " . $e->getMessage();
        }
    }
}

// 5. Video sayısını kontrol et
if (isset($conn)) {
    try {
        $stmt = $conn->query("SELECT COUNT(*) as count FROM videos");
        $count = $stmt->fetch()['count'];
        $results[] = "✅ Toplam video sayısı: $count";
        
        if ($count == 0) {
            $errors[] = "⚠️ Hiç video yok! install.php sayfasını çalıştırın.";
        }
    } catch(PDOException $e) {
        $errors[] = "❌ Video kontrolü hatası: " . $e->getMessage();
    }
}

// 6. Auth sınıfını test et
try {
    require_once 'php/auth.php';
    $auth = new Auth();
    $results[] = "✅ Auth sınıfı yüklendi";
} catch(Exception $e) {
    $errors[] = "❌ Auth sınıfı hatası: " . $e->getMessage();
}

// 7. Login testi
if (isset($auth) && isset($conn)) {
    try {
        // Test kullanıcısı ile login dene
        $test_email = 'demo@test.com';
        $test_pass = '123456';
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$test_email]);
        $user = $stmt->fetch();
        
        if ($user) {
            if (password_verify($test_pass, $user['password'])) {
                $results[] = "✅ Login testi başarılı: $test_email";
            } else {
                $errors[] = "❌ Şifre doğrulama hatası: $test_email";
            }
        } else {
            $errors[] = "❌ Kullanıcı bulunamadı: $test_email";
        }
    } catch(Exception $e) {
        $errors[] = "❌ Login test hatası: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Login Test</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 min-h-screen p-4 sm:p-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-xl shadow-lg p-6 sm:p-8 mb-6">
            <div class="text-center mb-8">
                <i class="mdi mdi-test-tube text-6xl text-violet-600 mb-4"></i>
                <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-2">Login Sistem Testi</h1>
                <p class="text-slate-600">Veritabanı ve kullanıcı kontrolü</p>
            </div>

            <?php if (!empty($results)): ?>
            <div class="bg-green-50 border border-green-200 rounded-lg p-4 sm:p-6 mb-6">
                <h3 class="text-green-900 font-semibold mb-3 flex items-center text-base sm:text-lg">
                    <i class="mdi mdi-check-circle text-2xl mr-2"></i>
                    Başarılı İşlemler
                </h3>
                <ul class="space-y-2">
                    <?php foreach ($results as $msg): ?>
                    <li class="text-green-700 text-sm sm:text-base break-words">
                        <?php echo htmlspecialchars($msg); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 sm:p-6 mb-6">
                <h3 class="text-red-900 font-semibold mb-3 flex items-center text-base sm:text-lg">
                    <i class="mdi mdi-alert-circle text-2xl mr-2"></i>
                    Hatalar ve Uyarılar
                </h3>
                <ul class="space-y-2">
                    <?php foreach ($errors as $error): ?>
                    <li class="text-red-700 text-sm sm:text-base break-words">
                        <?php echo htmlspecialchars($error); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 sm:p-6 mb-6">
                <h3 class="text-blue-900 font-semibold mb-3 text-base sm:text-lg">Test Hesapları</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-blue-200">
                                <th class="text-left py-2 px-2 text-blue-900">E-posta</th>
                                <th class="text-left py-2 px-2 text-blue-900">Şifre</th>
                                <th class="text-left py-2 px-2 text-blue-900 hidden sm:table-cell">Ad Soyad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-blue-100">
                                <td class="py-2 px-2 text-blue-800 break-all">demo@test.com</td>
                                <td class="py-2 px-2 text-blue-800">123456</td>
                                <td class="py-2 px-2 text-blue-800 hidden sm:table-cell">Demo Kullanıcı</td>
                            </tr>
                            <tr class="border-b border-blue-100">
                                <td class="py-2 px-2 text-blue-800 break-all">student1@lms.com</td>
                                <td class="py-2 px-2 text-blue-800">student123</td>
                                <td class="py-2 px-2 text-blue-800 hidden sm:table-cell">Ahmet Yılmaz</td>
                            </tr>
                            <tr class="border-b border-blue-100">
                                <td class="py-2 px-2 text-blue-800 break-all">test@lms.com</td>
                                <td class="py-2 px-2 text-blue-800">test123</td>
                                <td class="py-2 px-2 text-blue-800 hidden sm:table-cell">Test Kullanıcı</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-2 text-blue-800 break-all">admin@lms.com</td>
                                <td class="py-2 px-2 text-blue-800">admin123</td>
                                <td class="py-2 px-2 text-blue-800 hidden sm:table-cell">Admin</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                <a href="login.php" 
                   class="bg-violet-600 hover:bg-violet-700 text-white text-center font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-login"></i> Giriş Yap
                </a>
                <a href="signup.php" 
                   class="bg-green-600 hover:bg-green-700 text-white text-center font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-account-plus"></i> Kayıt Ol
                </a>
                <a href="install.php" 
                   class="bg-orange-600 hover:bg-orange-700 text-white text-center font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-cog"></i> Kurulum
                </a>
                <a href="lms-dashboard.php" 
                   class="bg-blue-600 hover:bg-blue-700 text-white text-center font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-view-dashboard"></i> Dashboard
                </a>
                <a href="index.php" 
                   class="bg-slate-600 hover:bg-slate-700 text-white text-center font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-home"></i> Ana Sayfa
                </a>
                <button onclick="location.reload()" 
                        class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 rounded-lg transition text-sm sm:text-base">
                    <i class="mdi mdi-refresh"></i> Yenile
                </button>
            </div>
        </div>

        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 sm:p-6">
            <h3 class="text-yellow-900 font-semibold mb-3 text-base sm:text-lg">
                <i class="mdi mdi-information"></i> Sorun Giderme
            </h3>
            <ol class="list-decimal list-inside space-y-2 text-yellow-800 text-sm sm:text-base">
                <li>Eğer veritabanı bağlantı hatası varsa: <code class="bg-yellow-100 px-2 py-1 rounded">install.php</code> sayfasını çalıştırın</li>
                <li>Eğer kullanıcı bulunamadı hatası varsa: Bu sayfa otomatik olarak test kullanıcılarını oluşturdu</li>
                <li>Eğer şifre hatası varsa: Yukarıdaki tabloda doğru şifreleri kullanın</li>
                <li>Hala sorun varsa: Sayfayı yenileyin ve tekrar test edin</li>
            </ol>
        </div>
    </div>
</body>
</html>
