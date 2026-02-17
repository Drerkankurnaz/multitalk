<?php
// Yardımcı Fonksiyonlar

function requireAuth() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }
}

function validateLang($lang_code) {
    global $LANGUAGES;
    if (empty($lang_code) || !isset($LANGUAGES[$lang_code])) {
        header('Location: language-selection.php');
        exit;
    }
    return $LANGUAGES[$lang_code];
}

function validateTheme($theme_id) {
    global $THEMES;
    if (empty($theme_id) || !isset($THEMES[$theme_id])) {
        header('Location: language-selection.php');
        exit;
    }
    return $THEMES[$theme_id];
}

function getCompletedThemes() {
    return [
        ['icon' => 'mdi-cart', 'name' => 'Süpermarket'],
        ['icon' => 'mdi-silverware-fork-knife', 'name' => 'Restoran'],
        ['icon' => 'mdi-bed', 'name' => 'Otel'],
        ['icon' => 'mdi-hospital-building', 'name' => 'Hastane'],
        ['icon' => 'mdi-pill', 'name' => 'Eczane'],
        ['icon' => 'mdi-bank', 'name' => 'Banka'],
        ['icon' => 'mdi-city', 'name' => 'Şehir'],
        ['icon' => 'mdi-party-popper', 'name' => 'Düğün']
    ];
}

function renderHead($title = 'MultiTalk') {
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="assets/css/tailwind.min.css">
    <link rel="stylesheet" href="assets/libs/@mdi/font/css/materialdesignicons.min.css">
    <link rel="icon" href="assets/images/logo-icon-64.png">
    <?php
}

function renderNavbar($backUrl = null, $title = '', $showUser = true) {
    ?>
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <?php if ($backUrl): ?>
                    <a href="<?php echo $backUrl; ?>" class="text-gray-600 hover:text-gray-900">
                        <i class="mdi mdi-arrow-left text-xl"></i>
                    </a>
                    <?php endif; ?>
                    <?php if ($title): ?>
                    <span class="font-semibold text-gray-900"><?php echo $title; ?></span>
                    <?php endif; ?>
                </div>
                <?php if ($showUser): ?>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 hidden sm:inline">
                        <i class="mdi mdi-account-circle mr-1"></i>
                        <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                    </span>
                    <a href="logout.php" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        <i class="mdi mdi-logout mr-1"></i>
                        <span class="hidden sm:inline">Çıkış</span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <?php
}
