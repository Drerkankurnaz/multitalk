<?php
// Proje Yapılandırma Dosyası

// Site Bilgileri
define('SITE_NAME', 'Diyaloglarla Yabancı Dil Öğretimi');
define('SITE_URL', 'http://localhost');
define('SITE_EMAIL', 'info@diyaloglarla.edu.tr');
define('SITE_PHONE', '+90 (222) 335 05 80');

// Diller
$LANGUAGES = [
    'tr' => [
        'name' => 'Türkçe',
        'name_en' => 'Turkish',
        'flag' => '🇹🇷',
        'code' => 'tr',
        'color' => 'red',
        'description' => 'Türkçe diyaloglarla öğrenin'
    ],
    'en' => [
        'name' => 'İngilizce',
        'name_en' => 'English',
        'flag' => '🇬🇧',
        'code' => 'en',
        'color' => 'blue',
        'description' => 'Learn with English dialogues'
    ],
    'de' => [
        'name' => 'Almanca',
        'name_en' => 'German',
        'flag' => '🇩🇪',
        'code' => 'de',
        'color' => 'yellow',
        'description' => 'Lernen Sie mit deutschen Dialogen'
    ],
    'fr' => [
        'name' => 'Fransızca',
        'name_en' => 'French',
        'flag' => '🇫🇷',
        'code' => 'fr',
        'color' => 'indigo',
        'description' => 'Apprenez avec des dialogues français'
    ],
    'es' => [
        'name' => 'İspanyolca',
        'name_en' => 'Spanish',
        'flag' => '🇪🇸',
        'code' => 'es',
        'color' => 'orange',
        'description' => 'Aprende con diálogos en español'
    ],
    'it' => [
        'name' => 'İtalyanca',
        'name_en' => 'Italian',
        'flag' => '🇮🇹',
        'code' => 'it',
        'color' => 'green',
        'description' => 'Impara con dialoghi italiani'
    ],
    'ru' => [
        'name' => 'Rusça',
        'name_en' => 'Russian',
        'flag' => '🇷🇺',
        'code' => 'ru',
        'color' => 'purple',
        'description' => 'Учитесь с русскими диалогами'
    ],
    'ar' => [
        'name' => 'Arapça',
        'name_en' => 'Arabic',
        'flag' => '🇸🇦',
        'code' => 'ar',
        'color' => 'pink',
        'description' => 'تعلم مع الحوارات العربية'
    ]
];

// Temalar - Merkezi tema tanımları
$THEMES = [
    'supermarket' => ['name' => 'Süpermarkette', 'icon' => 'mdi-cart', 'color' => 'blue', 'description' => 'Alışveriş süreçlerinde temel soru-cevap ve işlem diyalogları', 'duration' => '2:30', 'thumbnail' => 'assets/images/course/1.jpg'],
    'restaurant' => ['name' => 'Restoranda', 'icon' => 'mdi-silverware-fork-knife', 'color' => 'red', 'description' => 'Sipariş verme, tercih belirtme ve sosyal nezaket kalıpları', 'duration' => '3:15', 'thumbnail' => 'assets/images/course/2.jpg'],
    'hotel' => ['name' => 'Otelde', 'icon' => 'mdi-bed', 'color' => 'purple', 'description' => 'Rezervasyon, giriş-çıkış ve konaklama iletişimi', 'duration' => '2:45', 'thumbnail' => 'assets/images/course/3.jpg'],
    'hospital' => ['name' => 'Hastanede', 'icon' => 'mdi-hospital-building', 'color' => 'green', 'description' => 'Randevu, durum anlatma ve yönlendirme etkileşimleri', 'duration' => '3:00', 'thumbnail' => 'assets/images/course/4.jpg'],
    'pharmacy' => ['name' => 'Eczanede', 'icon' => 'mdi-pill', 'color' => 'pink', 'description' => 'İlaç talebi, kullanım bilgisi alma ve danışma konuşmaları', 'duration' => '2:20', 'thumbnail' => 'assets/images/course/5.jpg'],
    'bank' => ['name' => 'Bankada', 'icon' => 'mdi-bank', 'color' => 'indigo', 'description' => 'Günlük finansal işlemlerde temel iletişim kalıpları', 'duration' => '2:50', 'thumbnail' => 'assets/images/course/6.jpg'],
    'city' => ['name' => 'Şehirde', 'icon' => 'mdi-city', 'color' => 'yellow', 'description' => 'Yol sorma, ulaşım ve kamu alanı iletişim senaryoları', 'duration' => '2:40', 'thumbnail' => 'assets/images/course/7.jpg'],
    'wedding' => ['name' => 'Düğünde', 'icon' => 'mdi-party-popper', 'color' => 'orange', 'description' => 'Tebrik, tanışma ve kültürel sosyal etkileşim diyalogları', 'duration' => '3:10', 'thumbnail' => 'assets/images/course/8.jpg']
];

// Video URL'leri (Gerçek URL'lerle değiştirilecek)
define('DEFAULT_YOUTUBE_URL', 'https://www.youtube.com/embed/dQw4w9WgXcQ');
define('DEFAULT_VIMEO_URL', 'https://player.vimeo.com/video/76979871');

// Seviyeler
$LEVELS = [
    'a1' => [
        'name' => 'A1 Seviyesi',
        'title' => 'Başlangıç',
        'color' => 'green',
        'description' => 'Temel Kullanıcı - Başlangıç Seviyesi'
    ],
    'a2' => [
        'name' => 'A2 Seviyesi',
        'title' => 'Temel',
        'color' => 'blue',
        'description' => 'Temel Kullanıcı - Temel Seviye'
    ]
];

// Demo Kullanıcı
define('DEMO_EMAIL', 'demo@test.com');
define('DEMO_PASSWORD', '123456');
define('DEMO_NAME', 'Demo Kullanıcı');

// Veritabanı Ayarları
define('DB_HOST', getenv('DB_HOST') ?: 'db');
define('DB_NAME', getenv('DB_NAME') ?: 'lms_db');
define('DB_USER', getenv('DB_USER') ?: 'lms_user');
define('DB_PASS', getenv('DB_PASS') ?: 'lms_pass');

// Timezone
date_default_timezone_set('Europe/Istanbul');

// Session başlat
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
