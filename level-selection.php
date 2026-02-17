<?php
session_start();
require_once 'config.php';
require_once 'php/helpers.php';

requireAuth();

$lang_code = $_GET['lang'] ?? '';
if (empty($lang_code)) {
    header('Location: language-selection.php');
    exit;
}

$current_lang = validateLang($lang_code);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php renderHead('MultiTalk - Seviye Seçimi'); ?>
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-50 min-h-screen">
    
    <?php renderNavbar('language-selection.php', "{$current_lang['flag']} {$current_lang['name']}"); ?>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="text-8xl mb-6"><?php echo $current_lang['flag']; ?></div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">AOBM/CEFR Düzeyinizi Seçin</h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">İçerikler, sonuç raporunda belirtilen temel kullanıcı düzeyleri (A1-A2) esas alınarak hazırlanmıştır. Seviyenize uygun tematik diyaloglarla ilerleyin.</p>
        </div>

        <!-- Level Cards -->
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                
                <!-- A1 Level -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-green-400 to-green-600 p-6 text-white">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-3xl font-bold">A1 Seviyesi</h2>
                            <div class="bg-white bg-opacity-20 rounded-full px-4 py-2">
                                <span class="font-semibold">Başlangıç</span>
                            </div>
                        </div>
                        <p class="text-green-50">Temel Kullanıcı - Başlangıç Seviyesi</p>
                    </div>
                    
                    <div class="p-8">
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Bu seviyede neler öğreneceksiniz?</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Basit günlük ifadeler ve temel kalıplarla iletişim kurma</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Kendini tanıtma ve başkalarını tanıma</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Temel sosyal gereksinimleri ifade etme</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Basit sorular sorma ve cevaplama</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-semibold text-gray-700">İçerik</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-video mr-2 text-green-500"></i>
                                    <span>8 Video</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-clock-outline mr-2 text-green-500"></i>
                                    <span>~20 dakika</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-format-list-bulleted mr-2 text-green-500"></i>
                                    <span>8 Tema</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-subtitles mr-2 text-green-500"></i>
                                    <span>Altyazılı</span>
                                </div>
                            </div>
                        </div>
                        
                        <a href="themes.php?lang=<?php echo $lang_code; ?>&level=a1" 
                           class="block w-full bg-gradient-to-r from-green-500 to-green-600 text-white text-center py-4 rounded-lg hover:from-green-600 hover:to-green-700 transition font-semibold text-lg">
                            A1 Seviyesine Başla
                            <i class="mdi mdi-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- A2 Level -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-6 text-white">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-3xl font-bold">A2 Seviyesi</h2>
                            <div class="bg-white bg-opacity-20 rounded-full px-4 py-2">
                                <span class="font-semibold">Temel</span>
                            </div>
                        </div>
                        <p class="text-blue-50">Temel Kullanıcı - Temel Seviye</p>
                    </div>
                    
                    <div class="p-8">
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Bu seviyede neler öğreneceksiniz?</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-blue-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Sık kullanılan ifade kalıplarıyla akıcı etkileşim</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-blue-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Alışveriş, iş, çevre hakkında konuşma</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-blue-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Basit ve rutin görevlerde iletişim</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-blue-500 text-xl mr-2 mt-0.5"></i>
                                    <span class="text-gray-700">Yakın geçmiş ve planlanan durumlar hakkında konuşma</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-50 rounded-lg p-4 mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-semibold text-gray-700">İçerik</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-video mr-2 text-blue-500"></i>
                                    <span>8 Video</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-clock-outline mr-2 text-blue-500"></i>
                                    <span>~25 dakika</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-format-list-bulleted mr-2 text-blue-500"></i>
                                    <span>8 Tema</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <i class="mdi mdi-subtitles mr-2 text-blue-500"></i>
                                    <span>Altyazılı</span>
                                </div>
                            </div>
                        </div>
                        
                        <a href="themes.php?lang=<?php echo $lang_code; ?>&level=a2" 
                           class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white text-center py-4 rounded-lg hover:from-blue-600 hover:to-blue-700 transition font-semibold text-lg">
                            A2 Seviyesine Başla
                            <i class="mdi mdi-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- CEFR Info -->
        <div class="max-w-4xl mx-auto mt-12">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-indigo-100 rounded-full">
                            <i class="mdi mdi-information text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">AOBM/CEFR Nedir?</h3>
                        <p class="text-gray-600 leading-relaxed">
                            <strong>Diller İçin Avrupa Ortak Başvuru Metni (CEFR)</strong>, Avrupa Konseyi tarafından geliştirilen 
                            ve dil yeterliliğini değerlendirmek için kullanılan uluslararası bir standarttır. 
                            A1 ve A2 seviyeleri "Temel Kullanıcı" kategorisinde yer alır ve günlük yaşamda temel iletişim 
                            becerilerini kapsar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
