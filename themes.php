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
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <?php renderHead('MultiTalk - Temalar'); ?>
</head>
<body class="bg-gray-50">
    
    <?php 
    renderNavbar(
        "level-selection.php?lang={$lang_code}",
        "{$current_lang['flag']} {$current_lang['name']} <span class='px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm font-semibold ml-2'>{$level_upper}</span>"
    );
    ?>

    <!-- Header -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Günlük Yaşam Temaları</h1>
                <p class="text-lg text-indigo-100">
                    <?php echo $current_lang['name']; ?> dilinde, AOBM/CEFR <?php echo $level_upper; ?> düzeyine uygun 8 tematik diyalog ile iletişim becerilerinizi geliştirin.
                </p>
                <div class="mt-6 flex flex-wrap justify-center gap-4 text-sm">
                    <div class="flex items-center bg-white bg-opacity-20 rounded-full px-4 py-2">
                        <i class="mdi mdi-video mr-2"></i>
                        <span>8 Tema</span>
                    </div>
                    <div class="flex items-center bg-white bg-opacity-20 rounded-full px-4 py-2">
                        <i class="mdi mdi-clock-outline mr-2"></i>
                        <span>A1-A2 Uyumlu</span>
                    </div>
                    <div class="flex items-center bg-white bg-opacity-20 rounded-full px-4 py-2">
                        <i class="mdi mdi-subtitles mr-2"></i>
                        <span>Altyazılı</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Themes Grid -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach($THEMES as $id => $theme): ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 theme-card" data-theme-id="<?php echo $id; ?>">
                    <!-- Thumbnail -->
                    <div class="relative h-48 overflow-hidden bg-gradient-to-br from-<?php echo $theme['color']; ?>-400 to-<?php echo $theme['color']; ?>-600">
                        <img src="<?php echo $theme['thumbnail']; ?>" alt="<?php echo $theme['name']; ?>" class="w-full h-full object-cover opacity-80">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="mdi <?php echo $theme['icon']; ?> text-6xl text-white"></i>
                        </div>
                        <div class="absolute top-3 right-3 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm flex items-center">
                            <i class="mdi mdi-clock-outline mr-1"></i>
                            <?php echo $theme['duration']; ?>
                        </div>
                        <!-- Completed Badge -->
                        <div class="completed-badge absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold hidden">
                            <i class="mdi mdi-check-circle mr-1"></i>Tamamlandı
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">
                            <?php echo $theme['name']; ?>
                        </h3>
                        <p class="text-sm text-gray-600 mb-4">
                            <?php echo $theme['description']; ?>
                        </p>
                        
                        <!-- Stats -->
                        <div class="flex items-center justify-between text-xs text-gray-500 mb-4 pb-4 border-b">
                            <div class="flex items-center">
                                <i class="mdi mdi-account-voice mr-1"></i>
                                <span>Diyalog</span>
                            </div>
                            <div class="flex items-center">
                                <i class="mdi mdi-subtitles mr-1"></i>
                                <span>Altyazılı</span>
                            </div>
                        </div>
                        
                        <!-- Button -->
                        <a href="video-player.php?lang=<?php echo $lang_code; ?>&level=<?php echo $level; ?>&theme=<?php echo $id; ?>" 
                           class="block w-full bg-gradient-to-r from-<?php echo $theme['color']; ?>-500 to-<?php echo $theme['color']; ?>-600 text-white text-center py-3 rounded-lg hover:from-<?php echo $theme['color']; ?>-600 hover:to-<?php echo $theme['color']; ?>-700 transition font-semibold">
                            <i class="mdi mdi-play-circle mr-2"></i>İzle
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Progress Section -->
        <div class="max-w-6xl mx-auto mt-12">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-gray-900">İlerlemeniz</h2>
                    <span class="text-3xl font-bold text-indigo-600" id="progress-text">0/8</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-4 mb-4">
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-4 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
                <p class="text-gray-600 text-center" id="progress-message">
                    Henüz hiç video izlemediniz. Hemen başlayın ve ilerlemenizi takip edin!
                </p>
                <div class="mt-6 text-center">
                    <button onclick="resetProgress()" class="px-4 py-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition text-sm">
                        <i class="mdi mdi-refresh mr-1"></i>İlerlemeyi Sıfırla
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/multitalk.js"></script>
    <script>
        const langCode = '<?php echo $lang_code; ?>';
        const level = '<?php echo $level; ?>';
        
        function updateProgress() {
            const completed = Progress.getCompleted(langCode, level);
            const total = 8;
            const percentage = Progress.getPercentage(langCode, level, total);
            
            document.getElementById('progress-text').textContent = `${completed.length}/${total}`;
            document.getElementById('progress-bar').style.width = `${percentage}%`;
            
            const msgEl = document.getElementById('progress-message');
            if (completed.length === 0) {
                msgEl.textContent = 'Henüz hiç video izlemediniz. Hemen başlayın ve ilerlemenizi takip edin!';
            } else if (completed.length === total) {
                msgEl.innerHTML = `🎉 Tebrikler! Tüm videoları tamamladınız! <a href="certificate.php?lang=${langCode}&level=${level}" class="text-indigo-600 font-semibold hover:underline">Sertifikanızı görüntüleyin</a>`;
            } else {
                msgEl.textContent = `Harika gidiyorsunuz! ${total - completed.length} video daha kaldı.`;
            }
            
            completed.forEach(themeId => {
                const card = document.querySelector(`.theme-card[data-theme-id="${themeId}"]`);
                if (card) card.querySelector('.completed-badge').classList.remove('hidden');
            });
        }
        
        function resetProgress() {
            if (confirm('İlerlemenizi sıfırlamak istediğinizden emin misiniz?')) {
                Progress.reset(langCode, level);
                location.reload();
            }
        }
        
        document.addEventListener('DOMContentLoaded', updateProgress);
    </script>

</body>
</html>
