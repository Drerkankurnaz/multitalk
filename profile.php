<?php
session_start();

// Giriş kontrolü
if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiTalk - Profilim</title>
    <link rel="stylesheet" href="assets/css/tailwind.min.css">
    <link rel="stylesheet" href="assets/libs/@mdi/font/css/materialdesignicons.min.css">
    <link rel="icon" href="assets/images/logo-icon-64.png">
</head>
<body class="bg-gray-50">
    
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="index.php">
                    <span class="inline-block text-2xl font-bold tracking-tight text-indigo-700">MultiTalk</span>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="language-selection.php" class="text-gray-700 hover:text-indigo-600 transition">
                    <i class="mdi mdi-school mr-1"></i>
                    <span class="hidden sm:inline">Öğrenmeye Devam Et</span>
                </a>
                <a href="logout.php" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                    <i class="mdi mdi-logout mr-1"></i>Çıkış
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            
            <!-- Profile Header -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-8 mb-8 text-white">
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                        <i class="mdi mdi-account text-6xl text-indigo-600"></i>
                    </div>
                    <div class="text-center md:text-left flex-1">
                        <h1 class="text-3xl font-bold mb-2"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
                        <p class="text-indigo-100 mb-4"><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                        <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                            <div class="bg-white bg-opacity-20 rounded-full px-4 py-2 text-sm">
                                <i class="mdi mdi-calendar mr-1"></i>Üyelik: <?php echo date('d.m.Y'); ?>
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-full px-4 py-2 text-sm">
                                <i class="mdi mdi-video mr-1"></i>0 Video İzlendi
                            </div>
                            <div class="bg-white bg-opacity-20 rounded-full px-4 py-2 text-sm">
                                <i class="mdi mdi-clock-outline mr-1"></i>0 Dakika
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Sol Kolon -->
                <div class="md:col-span-2 space-y-8">
                    
                    <!-- İlerleme Durumu -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">
                            <i class="mdi mdi-chart-line mr-2"></i>İlerleme Durumu
                        </h2>
                        
                        <div class="space-y-6">
                            <?php foreach($LANGUAGES as $code => $lang): ?>
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center">
                                        <span class="text-2xl mr-2"><?php echo $lang['flag']; ?></span>
                                        <span class="font-semibold text-gray-900"><?php echo $lang['name']; ?></span>
                                    </div>
                                    <span class="text-sm text-gray-600">0/16 Video</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="bg-gradient-to-r from-<?php echo $lang['color']; ?>-400 to-<?php echo $lang['color']; ?>-600 h-3 rounded-full" style="width: 0%"></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Sertifikalar -->
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">
                            <i class="mdi mdi-certificate mr-2"></i>Sertifikalarım
                        </h2>
                        
                        <!-- Demo Sertifika - Gerçek uygulamada veritabanından gelecek -->
                        <div class="grid md:grid-cols-2 gap-4">
                            <?php
                            // Demo sertifikalar - gerçek uygulamada tamamlanan dil/seviyeler gösterilecek
                            $demo_certificates = [
                                ['lang' => 'tr', 'level' => 'a1', 'date' => '15.02.2024', 'completed' => true],
                                ['lang' => 'en', 'level' => 'a1', 'date' => '', 'completed' => false],
                            ];
                            
                            foreach($demo_certificates as $cert):
                                $lang = $LANGUAGES[$cert['lang']];
                                $level_name = strtoupper($cert['level']);
                            ?>
                            <div class="border-2 <?php echo $cert['completed'] ? 'border-green-200 bg-green-50' : 'border-gray-200 bg-gray-50'; ?> rounded-lg p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center">
                                        <span class="text-3xl mr-2"><?php echo $lang['flag']; ?></span>
                                        <div>
                                            <h3 class="font-semibold text-gray-900"><?php echo $lang['name']; ?></h3>
                                            <p class="text-sm text-gray-600"><?php echo $level_name; ?> Seviyesi</p>
                                        </div>
                                    </div>
                                    <?php if($cert['completed']): ?>
                                    <i class="mdi mdi-check-circle text-3xl text-green-500"></i>
                                    <?php else: ?>
                                    <i class="mdi mdi-lock text-3xl text-gray-400"></i>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if($cert['completed']): ?>
                                <div class="mb-3">
                                    <p class="text-xs text-gray-600 mb-1">Tamamlanma Tarihi</p>
                                    <p class="text-sm font-semibold text-gray-900"><?php echo $cert['date']; ?></p>
                                </div>
                                <a href="certificate.php?lang=<?php echo $cert['lang']; ?>&level=<?php echo $cert['level']; ?>" 
                                   class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white text-center py-2 rounded-lg hover:from-green-600 hover:to-green-700 transition text-sm font-semibold">
                                    <i class="mdi mdi-certificate mr-1"></i>Sertifikayı Görüntüle
                                </a>
                                <?php else: ?>
                                <div class="mb-3">
                                    <div class="flex justify-between text-xs text-gray-600 mb-1">
                                        <span>İlerleme</span>
                                        <span>0/8 Tema</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gray-400 h-2 rounded-full" style="width: 0%"></div>
                                    </div>
                                </div>
                                <a href="themes.php?lang=<?php echo $cert['lang']; ?>&level=<?php echo $cert['level']; ?>" 
                                   class="block w-full bg-gray-600 text-white text-center py-2 rounded-lg hover:bg-gray-700 transition text-sm font-semibold">
                                    <i class="mdi mdi-play mr-1"></i>Devam Et
                                </a>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600 mb-3">
                                <i class="mdi mdi-information-outline mr-1"></i>
                                Bir dilde tüm temaları tamamlayarak sertifika kazanın
                            </p>
                            <a href="language-selection.php" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                <i class="mdi mdi-plus-circle mr-1"></i>Yeni Dil Öğrenmeye Başla
                            </a>
                        </div>
                    </div>

                    <!-- Son İzlenenler -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">
                            <i class="mdi mdi-history mr-2"></i>Son İzlenenler
                        </h2>
                        <div class="text-center py-12">
                            <i class="mdi mdi-video-off text-6xl text-gray-300 mb-4"></i>
                            <p class="text-gray-600 mb-4">Henüz hiç video izlemediniz</p>
                            <a href="language-selection.php" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                                Öğrenmeye Başla
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Sağ Kolon -->
                <div class="space-y-8">
                    
                    <!-- İstatistikler -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">
                            <i class="mdi mdi-chart-box mr-2"></i>İstatistikler
                        </h2>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                <div class="flex items-center">
                                    <i class="mdi mdi-video text-2xl text-blue-600 mr-3"></i>
                                    <span class="text-gray-700">Toplam Video</span>
                                </div>
                                <span class="font-bold text-blue-600">0</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                                <div class="flex items-center">
                                    <i class="mdi mdi-check-circle text-2xl text-green-600 mr-3"></i>
                                    <span class="text-gray-700">Tamamlanan</span>
                                </div>
                                <span class="font-bold text-green-600">0</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-purple-50 rounded-lg">
                                <div class="flex items-center">
                                    <i class="mdi mdi-clock-outline text-2xl text-purple-600 mr-3"></i>
                                    <span class="text-gray-700">Toplam Süre</span>
                                </div>
                                <span class="font-bold text-purple-600">0 dk</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-orange-50 rounded-lg">
                                <div class="flex items-center">
                                    <i class="mdi mdi-fire text-2xl text-orange-600 mr-3"></i>
                                    <span class="text-gray-700">Günlük Seri</span>
                                </div>
                                <span class="font-bold text-orange-600">0 gün</span>
                            </div>
                        </div>
                    </div>

                    <!-- Rozetler -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">
                            <i class="mdi mdi-trophy mr-2"></i>Rozetler
                        </h2>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center opacity-30">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <i class="mdi mdi-star text-3xl text-gray-400"></i>
                                </div>
                                <p class="text-xs text-gray-500">İlk Video</p>
                            </div>
                            <div class="text-center opacity-30">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <i class="mdi mdi-fire text-3xl text-gray-400"></i>
                                </div>
                                <p class="text-xs text-gray-500">7 Gün</p>
                            </div>
                            <div class="text-center opacity-30">
                                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-2">
                                    <i class="mdi mdi-trophy text-3xl text-gray-400"></i>
                                </div>
                                <p class="text-xs text-gray-500">Tüm Temalar</p>
                            </div>
                        </div>
                    </div>

                    <!-- Hızlı Erişim -->
                    <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-4">
                            <i class="mdi mdi-rocket-launch mr-2"></i>Hızlı Başlat
                        </h3>
                        <div class="space-y-3">
                            <a href="language-selection.php" class="block bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-3 transition">
                                <i class="mdi mdi-earth mr-2"></i>Dil Seç
                            </a>
                            <a href="index.php#hakkinda" class="block bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-3 transition">
                                <i class="mdi mdi-information mr-2"></i>Proje Hakkında
                            </a>
                            <a href="index.php#iletişim" class="block bg-white bg-opacity-20 hover:bg-opacity-30 rounded-lg p-3 transition">
                                <i class="mdi mdi-email mr-2"></i>İletişim
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
