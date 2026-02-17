<?php
session_start();

// Eğer zaten giriş yapmışsa yönlendir
if(isset($_SESSION['user_id'])) {
    header('Location: language-selection.php');
    exit;
}

$success = '';
$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Basit validasyon
    if(empty($name) || empty($email) || empty($password)) {
        $error = 'Lütfen tüm alanları doldurun!';
    } elseif($password !== $confirm_password) {
        $error = 'Şifreler eşleşmiyor!';
    } elseif(strlen($password) < 6) {
        $error = 'Şifre en az 6 karakter olmalıdır!';
    } else {
        // Gerçek uygulamada veritabanına kayıt yapılır
        // Demo için direkt giriş yaptırıyoruz
        $_SESSION['user_id'] = rand(1, 1000);
        $_SESSION['user_name'] = $name;
        $_SESSION['user_email'] = $email;
        header('Location: language-selection.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Kayıt Ol</title>
    <link rel="stylesheet" href="assets/css/tailwind.min.css">
    <link rel="stylesheet" href="assets/libs/@mdi/font/css/materialdesignicons.min.css">
    <link rel="icon" href="assets/images/logo-icon-64.png">
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <a href="index.php">
                <span class="inline-block text-3xl font-bold tracking-tight text-indigo-700 mb-4">MultiTalk</span>
            </a>
            <h1 class="text-3xl font-bold text-gray-900">Hesap Oluştur</h1>
            <p class="text-gray-600 mt-2">Ücretsiz kayıt olun ve öğrenmeye başlayın</p>
        </div>

        <!-- Register Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <?php if($error): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center">
                <i class="mdi mdi-alert-circle mr-2"></i>
                <span><?php echo $error; ?></span>
            </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2" for="name">
                        <i class="mdi mdi-account mr-1"></i>Ad Soyad
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        placeholder="Adınız Soyadınız"
                    >
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">
                        <i class="mdi mdi-email mr-1"></i>E-posta Adresi
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        placeholder="ornek@email.com"
                    >
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2" for="password">
                        <i class="mdi mdi-lock mr-1"></i>Şifre
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        minlength="6"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        placeholder="En az 6 karakter"
                    >
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2" for="confirm_password">
                        <i class="mdi mdi-lock-check mr-1"></i>Şifre Tekrar
                    </label>
                    <input 
                        type="password" 
                        id="confirm_password" 
                        name="confirm_password" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        placeholder="Şifrenizi tekrar girin"
                    >
                </div>

                <div class="mb-6">
                    <label class="flex items-start">
                        <input type="checkbox" required class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 mt-1">
                        <span class="ml-2 text-sm text-gray-600">
                            <a href="#" class="text-indigo-600 hover:text-indigo-700">Kullanım Koşulları</a> ve 
                            <a href="#" class="text-indigo-600 hover:text-indigo-700">Gizlilik Politikası</a>'nı okudum ve kabul ediyorum.
                        </span>
                    </label>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition font-semibold text-lg"
                >
                    Kayıt Ol
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Zaten hesabınız var mı? 
                    <a href="login.php" class="text-indigo-600 hover:text-indigo-700 font-semibold">Giriş Yapın</a>
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="index.php" class="text-gray-600 hover:text-gray-900 transition">
                <i class="mdi mdi-arrow-left mr-1"></i>Ana Sayfaya Dön
            </a>
        </div>
    </div>

</body>
</html>
