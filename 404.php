<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Sayfa Bulunamadı</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-2xl">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            
            <!-- Header Kartı -->
            <div class="bg-gradient-to-r from-violet-600 to-fuchsia-600 p-6 sm:p-8 text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-4">
                    <i class="mdi mdi-alert-circle-outline text-5xl text-white"></i>
                </div>
                <h1 class="text-3xl sm:text-4xl font-bold text-white mb-2">404</h1>
                <p class="text-violet-100 text-lg">Sayfa Bulunamadı</p>
            </div>

            <!-- İçerik Kartı -->
            <div class="p-8 sm:p-12 text-center">
                <!-- Error İllüstrasyon -->
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-full mb-6">
                        <i class="mdi mdi-file-question-outline text-6xl text-violet-600"></i>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-4">
                        Aradığınız Sayfa Bulunamadı
                    </h2>
                    <p class="text-slate-600 text-base sm:text-lg max-w-md mx-auto mb-2">
                        Üzgünüz, aradığınız sayfa mevcut değil veya taşınmış olabilir.
                    </p>
                    <p class="text-slate-500 text-sm">
                        Lütfen URL'yi kontrol edin veya ana sayfaya dönün.
                    </p>
                </div>

                <!-- Öneriler Kartları -->
                <div class="grid sm:grid-cols-3 gap-4 mb-8">
                    <a href="index.php" class="p-4 bg-slate-50 hover:bg-slate-100 rounded-xl transition group">
                        <i class="mdi mdi-home text-3xl text-violet-600 mb-2 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="font-semibold text-slate-900 text-sm">Ana Sayfa</h3>
                        <p class="text-xs text-slate-500 mt-1">Başlangıç noktası</p>
                    </a>
                    
                    <a href="login.php" class="p-4 bg-slate-50 hover:bg-slate-100 rounded-xl transition group">
                        <i class="mdi mdi-login text-3xl text-violet-600 mb-2 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="font-semibold text-slate-900 text-sm">Giriş Yap</h3>
                        <p class="text-xs text-slate-500 mt-1">Hesabınıza erişin</p>
                    </a>
                    
                    <a href="language-selection.php" class="p-4 bg-slate-50 hover:bg-slate-100 rounded-xl transition group">
                        <i class="mdi mdi-earth text-3xl text-violet-600 mb-2 group-hover:scale-110 transition-transform inline-block"></i>
                        <h3 class="font-semibold text-slate-900 text-sm">Dil Seçimi</h3>
                        <p class="text-xs text-slate-500 mt-1">8 farklı dil</p>
                    </a>
                </div>

                <!-- Ana Buton -->
                <div class="space-y-3">
                    <a href="index.php" 
                       class="inline-flex items-center justify-center bg-gradient-to-r from-violet-600 to-fuchsia-600 hover:from-violet-700 hover:to-fuchsia-700 text-white font-semibold px-8 py-3 rounded-xl transition shadow-lg shadow-violet-500/30">
                        <i class="mdi mdi-arrow-left mr-2"></i>
                        Ana Sayfaya Dön
                    </a>
                    
                    <div>
                        <button onclick="history.back()" 
                                class="text-slate-600 hover:text-slate-900 text-sm font-medium transition">
                            <i class="mdi mdi-chevron-left"></i>
                            Önceki Sayfaya Dön
                        </button>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-slate-50 px-8 py-6 border-t border-slate-200">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm text-slate-600">
                    <div class="flex items-center space-x-4">
                        <a href="index.php" class="hover:text-violet-600 transition">Ana Sayfa</a>
                        <span class="text-slate-300">•</span>
                        <a href="aboutus.php" class="hover:text-violet-600 transition">Hakkında</a>
                        <span class="text-slate-300">•</span>
                        <a href="contactus.php" class="hover:text-violet-600 transition">İletişim</a>
                    </div>
                    <div class="text-center sm:text-right">
                        <p class="text-xs">
                            © <?php echo date('Y'); ?> MultiTalk - Anadolu Üniversitesi
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Yardım Kartı -->
        <div class="mt-6 bg-blue-50 border border-blue-200 rounded-xl p-4 text-center">
            <p class="text-sm text-blue-800">
                <i class="mdi mdi-information-outline mr-1"></i>
                <strong>Yardıma mı ihtiyacınız var?</strong> 
                <a href="contactus.php" class="text-blue-600 hover:text-blue-700 font-semibold underline">
                    Bize ulaşın
                </a>
            </p>
        </div>
    </div>
</body>
</html>
