<?php
session_start();
require_once 'config.php';
require_once 'php/helpers.php';

requireAuth();

$lang_code = $_GET['lang'] ?? '';
$level = $_GET['level'] ?? '';
$theme_id = $_GET['theme'] ?? '';

if (empty($lang_code) || empty($level) || empty($theme_id)) {
    header('Location: language-selection.php');
    exit;
}

$current_lang = validateLang($lang_code);
$current_theme = validateTheme($theme_id);
$level_upper = strtoupper($level);
$video_source = $_GET['source'] ?? 'youtube';
$video_url = $video_source === 'vimeo' ? DEFAULT_VIMEO_URL : DEFAULT_YOUTUBE_URL;
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php renderHead('MultiTalk - Video Player'); ?>
</head>
<body class="bg-gray-900">
    
    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="themes.php?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>" class="text-gray-300 hover:text-white">
                        <i class="mdi mdi-arrow-left text-xl"></i>
                    </a>
                    <div class="flex items-center space-x-2">
                        <i class="mdi <?php echo $current_theme['icon']; ?> text-2xl text-<?php echo $current_theme['color']; ?>-400"></i>
                        <span class="font-semibold text-white"><?php echo $current_theme['name']; ?></span>
                    </div>
                    <span class="hidden sm:inline px-3 py-1 bg-gray-700 text-gray-300 rounded-full text-sm">
                        <?php echo $current_lang['flag']; ?> <?php echo $current_lang['name']; ?> - <?php echo $level_upper; ?>
                    </span>
                </div>
                <div class="flex items-center space-x-4">
                    <button id="fullscreen-btn" class="text-gray-300 hover:text-white">
                        <i class="mdi mdi-fullscreen text-xl"></i>
                    </button>
                    <a href="logout.php" class="px-4 py-2 bg-gray-700 text-white rounded-lg hover:bg-gray-600 transition">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span class="hidden sm:inline">Çıkış</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-8">
                
                <!-- Video Player Section -->
                <div class="lg:col-span-2">
                    <!-- Video Container -->
                    <div class="bg-black rounded-xl overflow-hidden shadow-2xl mb-6">
                        <div class="relative" style="padding-bottom: 56.25%;">
                            <iframe 
                                id="video-player"
                                src="<?php echo $video_url; ?>?autoplay=0&cc_load_policy=1" 
                                class="absolute top-0 left-0 w-full h-full"
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <!-- Video Info -->
                    <div class="bg-gray-800 rounded-xl p-6 mb-6">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">
                                    <?php echo $current_theme['name']; ?>
                                </h1>
                                <p class="text-gray-400">
                                    <?php echo $current_lang['name']; ?> - <?php echo $level_upper; ?> Seviyesi
                                </p>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="markAsCompleted()" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                                    <i class="mdi mdi-check mr-1"></i>Tamamlandı
                                </button>
                            </div>
                        </div>

                        <!-- Video Source Toggle -->
                        <div class="flex items-center space-x-4 mb-4">
                            <span class="text-gray-400 text-sm">Video Kaynağı:</span>
                            <div class="flex space-x-2">
                                <a href="?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>&theme=<?php echo $theme_id; ?>&source=youtube" 
                                   class="px-4 py-2 <?php echo $video_source === 'youtube' ? 'bg-red-600' : 'bg-gray-700'; ?> text-white rounded-lg hover:bg-red-700 transition text-sm">
                                    <i class="mdi mdi-youtube mr-1"></i>YouTube
                                </a>
                                <a href="?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>&theme=<?php echo $theme_id; ?>&source=vimeo" 
                                   class="px-4 py-2 <?php echo $video_source === 'vimeo' ? 'bg-blue-600' : 'bg-gray-700'; ?> text-white rounded-lg hover:bg-blue-700 transition text-sm">
                                    <i class="mdi mdi-vimeo mr-1"></i>Vimeo
                                </a>
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-gray-700 rounded-lg p-3 text-center">
                                <i class="mdi mdi-subtitles text-2xl text-blue-400 mb-1"></i>
                                <p class="text-xs text-gray-300">Altyazılı</p>
                            </div>
                            <div class="bg-gray-700 rounded-lg p-3 text-center">
                                <i class="mdi mdi-animation-play text-2xl text-purple-400 mb-1"></i>
                                <p class="text-xs text-gray-300">Animasyonlu</p>
                            </div>
                            <div class="bg-gray-700 rounded-lg p-3 text-center">
                                <i class="mdi mdi-account-voice text-2xl text-green-400 mb-1"></i>
                                <p class="text-xs text-gray-300">Diyalog</p>
                            </div>
                            <div class="bg-gray-700 rounded-lg p-3 text-center">
                                <i class="mdi mdi-certificate text-2xl text-yellow-400 mb-1"></i>
                                <p class="text-xs text-gray-300">CEFR <?php echo $level_upper; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="bg-gray-800 rounded-xl p-6">
                        <h2 class="text-xl font-bold text-white mb-4">
                            <i class="mdi mdi-information-outline mr-2"></i>Diyalog Hakkında
                        </h2>
                        <p class="text-gray-300 leading-relaxed mb-4">
                            Bu diyalog, günlük yaşamda <?php echo strtolower($current_theme['name']); ?> karşılaşabileceğiniz 
                            durumları içermektedir. <?php echo $level_upper; ?> seviyesine uygun kelime ve gramer yapıları kullanılmıştır.
                        </p>
                        <div class="bg-gray-700 rounded-lg p-4">
                            <h3 class="text-white font-semibold mb-2">Öğrenme Hedefleri:</h3>
                            <ul class="space-y-2 text-gray-300 text-sm">
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-400 mr-2 mt-0.5"></i>
                                    <span>Günlük konuşmalarda kullanılan temel ifadeler</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-400 mr-2 mt-0.5"></i>
                                    <span>Kültürel bağlama uygun iletişim becerileri</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="mdi mdi-check-circle text-green-400 mr-2 mt-0.5"></i>
                                    <span>Pratik durumlar için hazırlık</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Other Themes -->
                    <div class="bg-gray-800 rounded-xl p-6 mb-6">
                        <h2 class="text-xl font-bold text-white mb-4">
                            <i class="mdi mdi-playlist-play mr-2"></i>Diğer Temalar
                        </h2>
                        <div class="space-y-3">
                            <?php foreach($THEMES as $tid => $t): 
                                $is_current = ($tid === $theme_id);
                            ?>
                            <a href="video-player.php?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>&theme=<?php echo $tid; ?>" 
                               class="block p-3 <?php echo $is_current ? 'bg-gray-700 border-l-4 border-'.$t['color'].'-500' : 'bg-gray-700 hover:bg-gray-600'; ?> rounded-lg transition">
                                <div class="flex items-center">
                                    <i class="mdi <?php echo $t['icon']; ?> text-2xl text-<?php echo $t['color']; ?>-400 mr-3"></i>
                                    <div class="flex-1">
                                        <p class="text-white font-semibold text-sm"><?php echo $t['name']; ?></p>
                                        <p class="text-gray-400 text-xs">2-3 dakika</p>
                                    </div>
                                    <?php if($is_current): ?>
                                    <i class="mdi mdi-play-circle text-<?php echo $t['color']; ?>-400 text-xl"></i>
                                    <?php endif; ?>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Tips -->
                    <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-3">
                            <i class="mdi mdi-lightbulb-on mr-2"></i>İpuçları
                        </h3>
                        <ul class="space-y-2 text-sm text-indigo-100">
                            <li class="flex items-start">
                                <i class="mdi mdi-check mr-2 mt-0.5"></i>
                                <span>Videoyu birden fazla kez izleyin</span>
                            </li>
                            <li class="flex items-start">
                                <i class="mdi mdi-check mr-2 mt-0.5"></i>
                                <span>Altyazıları takip edin</span>
                            </li>
                            <li class="flex items-start">
                                <i class="mdi mdi-check mr-2 mt-0.5"></i>
                                <span>Diyalogları tekrar edin</span>
                            </li>
                            <li class="flex items-start">
                                <i class="mdi mdi-check mr-2 mt-0.5"></i>
                                <span>Günlük hayatta kullanmayı deneyin</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="assets/js/multitalk.js"></script>
    <script>
        document.getElementById('fullscreen-btn').addEventListener('click', () => {
            Fullscreen.request(document.getElementById('video-player'));
        });

        function markAsCompleted() {
            const langCode = '<?php echo $lang_code; ?>';
            const level = '<?php echo $level; ?>';
            const themeId = '<?php echo $theme_id; ?>';
            
            if (Progress.markComplete(langCode, level, themeId)) {
                const completed = Progress.getCompleted(langCode, level);
                
                if (completed.length === 8) {
                    if (confirm('🎉 Tebrikler! Tüm temaları tamamladınız! Sertifikanızı görüntülemek ister misiniz?')) {
                        window.location.href = `certificate.php?lang=${langCode}&level=${level}`;
                    }
                } else {
                    alert(`✅ Video tamamlandı olarak işaretlendi! (${completed.length}/8)`);
                }
            } else {
                alert('Bu video zaten tamamlandı olarak işaretlenmiş.');
            }
        }
    </script>

</body>
</html>
