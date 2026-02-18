<?php
require_once 'config.php';
require_once 'php/auth.php';
require_once 'php/video.php';
require_once 'php/certificate.php';

$auth = new Auth();
if (!$auth->isLoggedIn()) {
    header('Location: login.php');
    exit;
}

$videoManager = new Video();
$selectedLang = $_SESSION['selected_lang'] ?? 'tr';
if (!$videoManager->isAllCompleted($_SESSION['user_id'], $selectedLang)) {
    header('Location: lms-dashboard.php');
    exit;
}

$user = $auth->getCurrentUser();
$certificateManager = new Certificate();
$certificate = $certificateManager->getOrCreateCertificate($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Katılım Belgesi</title>
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        @media print {
            .no-print { display: none; }
            body { background: white; }
        }
        .certificate-border {
            border: 8px solid;
            border-image: linear-gradient(45deg, #7c3aed, #d946ef) 1;
        }
    </style>
</head>
<body class="bg-slate-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm border-b border-slate-200 no-print sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-2 sm:space-x-4">
                    <a href="lms-dashboard.php" class="text-violet-600 hover:text-violet-700">
                        <i class="mdi mdi-arrow-left text-xl"></i>
                    </a>
                    <div class="h-6 w-px bg-slate-300"></div>
                    <div>
                        <h1 class="text-base sm:text-lg font-bold text-violet-600 leading-tight">MultiTalk</h1>
                        <p class="text-xs text-slate-400 font-medium hidden sm:block">Diyaloglarla Yabancı Dil Öğretimi</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="downloadCertificate()" class="bg-green-600 hover:bg-green-700 text-white px-3 sm:px-4 py-2 rounded-lg transition text-sm sm:text-base">
                        <i class="mdi mdi-download"></i> <span class="hidden sm:inline">İndir</span>
                    </button>
                    <button onclick="window.print()" class="bg-violet-600 hover:bg-violet-700 text-white px-3 sm:px-4 py-2 rounded-lg transition text-sm sm:text-base">
                        <i class="mdi mdi-printer"></i> <span class="hidden sm:inline">Yazdır</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-4 sm:py-6 lg:py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Sertifika -->
            <div class="bg-white certificate-border rounded-lg p-6 sm:p-8 lg:p-12 shadow-2xl">
                <div class="text-center">
                    <div class="mb-4 sm:mb-6 lg:mb-8">
                        <i class="mdi mdi-certificate text-5xl sm:text-6xl lg:text-8xl text-violet-600"></i>
                    </div>
                    
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mb-2 sm:mb-4">KATILIM BELGESİ</h1>
                    <p class="text-base sm:text-lg lg:text-xl text-slate-600 mb-4 sm:mb-6 lg:mb-8">Bu belge ile onaylanır ki</p>
                    
                    <h2 class="text-2xl sm:text-3xl lg:text-5xl font-bold text-violet-600 mb-4 sm:mb-6 lg:mb-8 border-b-2 sm:border-b-4 border-violet-600 inline-block pb-1 sm:pb-2 break-words max-w-full px-2">
                        <?php echo htmlspecialchars($user['full_name']); ?>
                    </h2>
                    
                    <p class="text-sm sm:text-base lg:text-xl text-slate-700 mb-4 sm:mb-6 lg:mb-8 leading-relaxed max-w-2xl mx-auto px-4">
                        LMS platformunda yer alan tüm eğitim videolarını başarıyla tamamlamış ve 
                        bu eğitim programına katılım göstermiştir.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8 mb-4 sm:mb-6 lg:mb-8 max-w-xl mx-auto">
                        <div class="text-center p-3 sm:p-4 bg-slate-50 rounded-lg">
                            <p class="text-xs sm:text-sm text-slate-500 mb-1">Belge Tarihi</p>
                            <p class="text-sm sm:text-base lg:text-lg font-semibold text-slate-900">
                                <?php echo date('d.m.Y', strtotime($certificate['issued_at'])); ?>
                            </p>
                        </div>
                        <div class="text-center p-3 sm:p-4 bg-slate-50 rounded-lg">
                            <p class="text-xs sm:text-sm text-slate-500 mb-1">Belge No</p>
                            <p class="text-sm sm:text-base lg:text-lg font-semibold text-slate-900 break-all">
                                <?php echo htmlspecialchars($certificate['certificate_code']); ?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-6 sm:mt-8 lg:mt-12 pt-4 sm:pt-6 lg:pt-8 border-t-2 border-slate-200">
                        <p class="text-slate-800 text-sm sm:text-base font-semibold">MultiTalk</p>
                        <p class="text-xs sm:text-sm text-slate-500 mt-1">Diyaloglarla Yabancı Dil Öğretimi</p>
                    </div>
                </div>
            </div>

            <!-- Doğrulama Bilgisi -->
            <div class="mt-4 sm:mt-6 lg:mt-8 bg-blue-50 border border-blue-200 rounded-lg p-4 sm:p-6 text-center no-print">
                <p class="text-blue-900 text-sm sm:text-base">
                    <i class="mdi mdi-information"></i>
                    Bu belgenin doğruluğu <strong class="break-all"><?php echo htmlspecialchars($certificate['certificate_code']); ?></strong> 
                    kodu ile sistemden kontrol edilebilir.
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        function downloadCertificate() {
            const btn = document.querySelector('[onclick="downloadCertificate()"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="mdi mdi-loading mdi-spin"></i> <span class="hidden sm:inline">Hazırlanıyor...</span>';
            btn.disabled = true;

            const cert = document.querySelector('.certificate-border').parentElement;
            
            html2canvas(cert, {
                scale: 2,
                backgroundColor: '#ffffff',
                logging: false,
                useCORS: true
            }).then(canvas => {
                const link = document.createElement('a');
                link.download = 'MultiTalk-Sertifika-<?php echo date("Y-m-d"); ?>.png';
                link.href = canvas.toDataURL('image/png');
                link.click();
                btn.innerHTML = originalText;
                btn.disabled = false;
            }).catch(err => {
                console.error('İndirme hatası:', err);
                alert('Sertifika indirilemedi. Lütfen "Yazdır" butonunu kullanarak PDF olarak kaydedin.');
                btn.innerHTML = originalText;
                btn.disabled = false;
            });
        }
    </script>
</body>
</html>
