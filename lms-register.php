<?php
require_once 'config.php';
require_once 'php/auth.php';

$auth = new Auth();
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $full_name = $_POST['full_name'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';
    
    if ($password !== $password_confirm) {
        $error = 'Şifreler eşleşmiyor!';
    } elseif (strlen($password) < 6) {
        $error = 'Şifre en az 6 karakter olmalıdır!';
    } else {
        try {
            if ($auth->register($email, $password, $full_name)) {
                $success = 'Kayıt başarılı! Giriş yapabilirsiniz.';
            }
        } catch (Exception $e) {
            $error = 'Bu e-posta adresi zaten kullanılıyor!';
        }
    }
}

if ($auth->isLoggedIn()) {
    header('Location: lms-dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Kayıt Ol</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-violet-600 to-fuchsia-600 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-xl sm:rounded-2xl shadow-2xl p-6 sm:p-8">
            <div class="text-center mb-6 sm:mb-8">
                <h1 class="text-2xl sm:text-3xl font-bold text-violet-600 mb-1">MultiTalk</h1>
                <p class="text-slate-500 text-sm mb-4">Diyaloglarla Yabancı Dil Öğretimi</p>
                <div class="h-px bg-slate-200 mb-4"></div>
                <p class="text-slate-600 text-sm sm:text-base font-medium">Yeni Hesap Oluşturun</p>
            </div>

            <?php if ($error): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-4 sm:mb-6 text-sm sm:text-base">
                <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>

            <?php if ($success): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-4 sm:mb-6 text-sm sm:text-base">
                <?php echo htmlspecialchars($success); ?>
            </div>
            <?php endif; ?>

            <form method="POST" class="space-y-4 sm:space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Ad Soyad</label>
                    <input type="text" name="full_name" required 
                           class="w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-600 focus:border-transparent outline-none transition text-sm sm:text-base"
                           placeholder="Adınız Soyadınız">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">E-posta</label>
                    <input type="email" name="email" required 
                           class="w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-600 focus:border-transparent outline-none transition text-sm sm:text-base"
                           placeholder="ornek@email.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Şifre</label>
                    <input type="password" name="password" required 
                           class="w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-600 focus:border-transparent outline-none transition text-sm sm:text-base"
                           placeholder="••••••••">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Şifre Tekrar</label>
                    <input type="password" name="password_confirm" required 
                           class="w-full px-4 py-2 sm:py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-600 focus:border-transparent outline-none transition text-sm sm:text-base"
                           placeholder="••••••••">
                </div>

                <button type="submit" 
                        class="w-full bg-violet-600 hover:bg-violet-700 text-white font-medium py-2 sm:py-3 rounded-lg transition duration-200 text-sm sm:text-base">
                    Kayıt Ol
                </button>
            </form>

            <div class="mt-4 sm:mt-6 text-center">
                <p class="text-slate-600 text-sm sm:text-base">Zaten hesabınız var mı? 
                    <a href="lms-login.php" class="text-violet-600 hover:text-violet-700 font-medium">Giriş Yapın</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
