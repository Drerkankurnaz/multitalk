<?php
session_start();
require_once 'config.php';
require_once 'php/helpers.php';

requireAuth();

$lang_code = $_GET['lang'] ?? '';
$level = $_GET['level'] ?? '';

if (empty($lang_code) || empty($level)) {
    header('Location: language-selection.php');
    exit;
}

$current_lang = validateLang($lang_code);
$level_upper = strtoupper($level);
$certificate_id = strtoupper(uniqid('CERT-'));
$completion_date = date('d.m.Y');
$user_name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php renderHead('MultiTalk - Sertifika'); ?>
    <style>
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
            .certificate-container { box-shadow: none !important; margin: 0 !important; }
        }
        
        .certificate-border {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }
        
        .certificate-inner {
            background: white;
            border: 3px solid #f7fafc;
            position: relative;
        }
        
        .corner-decoration {
            position: absolute;
            width: 80px;
            height: 80px;
            border: 3px solid #667eea;
        }
        
        .corner-tl { top: 20px; left: 20px; border-right: none; border-bottom: none; }
        .corner-tr { top: 20px; right: 20px; border-left: none; border-bottom: none; }
        .corner-bl { bottom: 20px; left: 20px; border-right: none; border-top: none; }
        .corner-br { bottom: 20px; right: 20px; border-left: none; border-top: none; }
        
        .signature-line {
            border-top: 2px solid #4a5568;
            width: 200px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen py-8">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-md mb-8 no-print">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="profile.php" class="text-gray-600 hover:text-gray-900">
                        <i class="mdi mdi-arrow-left text-xl"></i>
                    </a>
                    <span class="font-semibold text-gray-900">Tamamlama Sertifikası</span>
                </div>
                <div class="flex items-center space-x-3">
                    <button onclick="window.print()" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        <i class="mdi mdi-printer mr-1"></i>Yazdır
                    </button>
                    <button onclick="downloadCertificate()" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        <i class="mdi mdi-download mr-1"></i>İndir
                    </button>
                    <a href="profile.php" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <i class="mdi mdi-close mr-1"></i>Kapat
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Certificate -->
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Success Message -->
            <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6 mb-8 no-print">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="mdi mdi-check-circle text-5xl text-green-600"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-2xl font-bold text-green-900 mb-2">Tebrikler! 🎉</h2>
                        <p class="text-green-700">
                            <?php echo $current_lang['name']; ?> dilinde <?php echo $level_upper; ?> seviyesindeki tüm diyalogları başarıyla tamamladınız. 
                            Sertifikanızı indirebilir veya yazdırabilirsiniz.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Certificate Container -->
            <div id="certificate" class="certificate-container bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="certificate-border">
                    <div class="certificate-inner p-12 md:p-16 relative">
                        
                        <!-- Corner Decorations -->
                        <div class="corner-decoration corner-tl"></div>
                        <div class="corner-decoration corner-tr"></div>
                        <div class="corner-decoration corner-bl"></div>
                        <div class="corner-decoration corner-br"></div>
                        
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <span class="inline-block text-4xl font-bold tracking-tight text-indigo-700 mb-6">MultiTalk</span>
                            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" style="font-family: serif;">
                                Tamamlama Sertifikası
                            </h1>
                            <div class="w-32 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto"></div>
                        </div>

                        <!-- Content -->
                        <div class="text-center mb-8">
                            <p class="text-lg text-gray-600 mb-6">Bu sertifika</p>
                            
                            <h2 class="text-3xl md:text-4xl font-bold text-indigo-600 mb-6" style="font-family: serif;">
                                <?php echo htmlspecialchars($user_name); ?>
                            </h2>
                            
                            <p class="text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto mb-6">
                                adlı öğrencinin, <strong>Anadolu Üniversitesi</strong> tarafından desteklenen 
                                <strong>"Diyaloglarla Yabancı Dil Öğretimi"</strong> projesi kapsamında,
                            </p>
                            
                            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 mb-6 inline-block">
                                <div class="flex items-center justify-center space-x-3 mb-2">
                                    <span class="text-4xl"><?php echo $current_lang['flag']; ?></span>
                                    <h3 class="text-2xl font-bold text-gray-900"><?php echo $current_lang['name']; ?></h3>
                                </div>
                                <p class="text-xl font-semibold text-indigo-600">
                                    CEFR <?php echo $level_upper; ?> Seviyesi
                                </p>
                            </div>
                            
                            <p class="text-lg text-gray-700 leading-relaxed max-w-2xl mx-auto mb-8">
                                programındaki <strong>8 günlük yaşam temasını</strong> başarıyla tamamladığını 
                                ve <strong>16 diyalog videosunu</strong> izlediğini onaylar.
                            </p>
                        </div>

                        <!-- Themes Completed -->
                        <div class="mb-8">
                            <h4 class="text-center text-sm font-semibold text-gray-600 mb-4">Tamamlanan Temalar</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 max-w-3xl mx-auto">
                                <?php foreach(getCompletedThemes() as $theme): ?>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="mdi <?php echo $theme['icon']; ?> text-green-500 mr-1"></i>
                                    <span><?php echo $theme['name']; ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Date and Signatures -->
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <div class="text-center">
                                <p class="text-gray-600 mb-2">Tamamlanma Tarihi</p>
                                <p class="text-xl font-bold text-gray-900"><?php echo $completion_date; ?></p>
                            </div>
                            <div class="text-center">
                                <p class="text-gray-600 mb-2">Sertifika No</p>
                                <p class="text-xl font-bold text-gray-900"><?php echo $certificate_id; ?></p>
                            </div>
                        </div>

                        <!-- Signature -->
                        <div class="text-center">
                            <div class="signature-line mb-2"></div>
                            <p class="text-sm font-semibold text-gray-700">Proje Koordinatörü</p>
                            <p class="text-xs text-gray-500">Anadolu Üniversitesi</p>
                        </div>

                        <!-- Footer -->
                        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                            <p class="text-xs text-gray-500">
                                Bu sertifika, Anadolu Üniversitesi Bilimsel Araştırma Projeleri Koordinasyon Birimi 
                                tarafından desteklenen "Diyaloglarla Yabancı Dil Öğretimi" projesi kapsamında verilmiştir.
                            </p>
                            <p class="text-xs text-gray-400 mt-2">
                                Sertifika Doğrulama: <multitalk class="anadolu"></multitalk>.edu.tr/verify/<?php echo $certificate_id; ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Share Section -->
            <div class="mt-8 bg-white rounded-xl shadow-lg p-6 no-print">
                <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">
                    <i class="mdi mdi-share-variant mr-2"></i>Başarınızı Paylaşın
                </h3>
                <div class="flex flex-wrap justify-center gap-3">
                    <button onclick="shareOnTwitter()" class="px-6 py-3 bg-blue-400 text-white rounded-lg hover:bg-blue-500 transition">
                        <i class="mdi mdi-twitter mr-2"></i>Twitter'da Paylaş
                    </button>
                    <button onclick="shareOnFacebook()" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        <i class="mdi mdi-facebook mr-2"></i>Facebook'ta Paylaş
                    </button>
                    <button onclick="shareOnLinkedIn()" class="px-6 py-3 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition">
                        <i class="mdi mdi-linkedin mr-2"></i>LinkedIn'de Paylaş
                    </button>
                    <button onclick="copyLink()" class="px-6 py-3 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition">
                        <i class="mdi mdi-link mr-2"></i>Linki Kopyala
                    </button>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="mt-8 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-8 text-white no-print">
                <h3 class="text-2xl font-bold mb-4 text-center">Sırada Ne Var?</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="language-selection.php" class="bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-6 text-center transition">
                        <i class="mdi mdi-earth text-4xl mb-3"></i>
                        <h4 class="font-semibold mb-2">Yeni Dil Öğren</h4>
                        <p class="text-sm text-indigo-100">7 farklı dil daha sizi bekliyor</p>
                    </a>
                    <a href="level-selection.php?lang=<?php echo $lang_code; ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-6 text-center transition">
                        <i class="mdi mdi-arrow-up-bold text-4xl mb-3"></i>
                        <h4 class="font-semibold mb-2">Seviye Atla</h4>
                        <p class="text-sm text-indigo-100">
                            <?php echo $level === 'a1' ? 'A2 seviyesine geç' : 'B1 seviyesi yakında'; ?>
                        </p>
                    </a>
                    <a href="themes.php?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>" class="bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-6 text-center transition">
                        <i class="mdi mdi-refresh text-4xl mb-3"></i>
                        <h4 class="font-semibold mb-2">Tekrar Et</h4>
                        <p class="text-sm text-indigo-100">Videoları tekrar izle ve pekiştir</p>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="assets/js/multitalk.js"></script>
    <script>
        function downloadCertificate() {
            Certificate.download('certificate', 'sertifika-<?php echo $lang_code; ?>-<?php echo $level; ?>-<?php echo date("Y-m-d"); ?>.png');
        }

        function shareOnTwitter() {
            Share.twitter('<?php echo $current_lang["name"]; ?> dilinde <?php echo $level_upper; ?> seviyesini tamamladım! 🎉 #DiyaloglarlaÖğren #YabancıDil');
        }

        function shareOnFacebook() {
            Share.facebook();
        }

        function shareOnLinkedIn() {
            Share.linkedin();
        }

        function copyLink() {
            Share.copyLink();
        }
    </script>

</body>
</html>
