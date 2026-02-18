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
    'giris' => ['name' => 'Giriş', 'icon' => 'mdi-hand-wave', 'color' => 'blue', 'description' => 'Temel tanışma diyalogları ve selamlaşma ifadeleri', 'duration' => '2:30', 'thumbnail' => 'assets/images/course/1.jpg'],
    'yolda' => ['name' => 'Yolda', 'icon' => 'mdi-road-variant', 'color' => 'green', 'description' => 'Yol sorma, yön tarifi ve ulaşım diyalogları', 'duration' => '3:00', 'thumbnail' => 'assets/images/course/2.jpg'],
    'telefonda' => ['name' => 'Telefonda', 'icon' => 'mdi-phone', 'color' => 'purple', 'description' => 'Telefon görüşmesi ve iletişim diyalogları', 'duration' => '2:45', 'thumbnail' => 'assets/images/course/3.jpg'],
    'universitede' => ['name' => 'Üniversitede', 'icon' => 'mdi-school', 'color' => 'indigo', 'description' => 'Üniversite ortamında günlük iletişim diyalogları', 'duration' => '3:15', 'thumbnail' => 'assets/images/course/4.jpg'],
    'supermarket' => ['name' => 'Süpermarkette', 'icon' => 'mdi-cart', 'color' => 'orange', 'description' => 'Süpermarkette alışveriş ve fiyat sorma diyalogları', 'duration' => '2:50', 'thumbnail' => 'assets/images/course/5.jpg'],
    'evde' => ['name' => 'Evde', 'icon' => 'mdi-home', 'color' => 'red', 'description' => 'Ev ortamında günlük yaşam diyalogları', 'duration' => '2:40', 'thumbnail' => 'assets/images/course/6.jpg'],
    'restaurant' => ['name' => 'Restoranda', 'icon' => 'mdi-silverware-fork-knife', 'color' => 'red', 'description' => 'Restoranda sipariş verme ve hesap ödeme diyalogları', 'duration' => '3:10', 'thumbnail' => 'assets/images/course/7.jpg'],
    'magazada' => ['name' => 'Mağazada', 'icon' => 'mdi-store', 'color' => 'pink', 'description' => 'Mağazada alışveriş ve ürün sorma diyalogları', 'duration' => '2:30', 'thumbnail' => 'assets/images/course/8.jpg'],
    'garda' => ['name' => 'Garda', 'icon' => 'mdi-train', 'color' => 'yellow', 'description' => 'Tren garında bilet alma ve seyahat diyalogları', 'duration' => '2:45', 'thumbnail' => 'assets/images/course/9.jpg'],
    'hotel' => ['name' => 'Otelde', 'icon' => 'mdi-bed', 'color' => 'purple', 'description' => 'Otel rezervasyonu, giriş-çıkış ve konaklama diyalogları', 'duration' => '3:00', 'thumbnail' => 'assets/images/course/10.jpg'],
    'sehirde' => ['name' => 'Şehirde', 'icon' => 'mdi-city', 'color' => 'blue', 'description' => 'Şehirde yol sorma, ulaşım ve kamu alanı diyalogları', 'duration' => '2:50', 'thumbnail' => 'assets/images/course/11.jpg'],
    'dugunde' => ['name' => 'Düğünde', 'icon' => 'mdi-party-popper', 'color' => 'orange', 'description' => 'Düğün ortamında tebrik, tanışma ve sosyal etkileşim diyalogları', 'duration' => '3:10', 'thumbnail' => 'assets/images/course/12.jpg'],
    'hospital' => ['name' => 'Hastanede', 'icon' => 'mdi-hospital-building', 'color' => 'green', 'description' => 'Hastanede randevu, muayene ve tedavi diyalogları', 'duration' => '3:00', 'thumbnail' => 'assets/images/course/4.jpg'],
    'pharmacy' => ['name' => 'Eczanede', 'icon' => 'mdi-pill', 'color' => 'pink', 'description' => 'Eczanede ilaç talebi, kullanım bilgisi ve danışma diyalogları', 'duration' => '2:20', 'thumbnail' => 'assets/images/course/5.jpg'],
    'bank' => ['name' => 'Bankada', 'icon' => 'mdi-bank', 'color' => 'indigo', 'description' => 'Bankada hesap işlemleri ve finansal iletişim diyalogları', 'duration' => '2:50', 'thumbnail' => 'assets/images/course/6.jpg']
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
