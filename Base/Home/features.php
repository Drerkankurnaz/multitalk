<?php
$features = [
    [
        'icon' => 'mdi mdi-video-outline text-3xl', 
        'title' => 'Diyalog Temelli İçerikler', 
        'desc' => "Günlük yaşam iletişim durumlarını yansıtan tematik diyaloglarla anlamlı bağlam içinde öğrenme sağlayın.", 
    ],
    [
        'icon' => 'mdi mdi-translate text-3xl', 
        'title' => 'Sekiz Dilde Uygulama', 
        'desc' => "Türkçe, İngilizce, Almanca, Fransızca, İtalyanca, İspanyolca, Rusça ve Arapça için yapılandırılmış içerikler sunulur.", 
    ],
    [
        'icon' => 'mdi mdi-chart-line text-3xl', 
        'title' => 'İletişimsel Yetkinlik Odağı', 
        'desc' => "Söz varlığı ve dilbilgisinin yanında iletişim bağlamı, kültürel normlar ve etkileşim becerileri hedeflenir.", 
    ],
    [
        'icon' => 'mdi mdi-account-multiple-outline text-3xl', 
        'title' => 'AOBM/CEFR A1-A2 Uyumu', 
        'desc' => "İçerikler, temel kullanıcı düzeyindeki öğrenicilerin gerçek yaşamda iletişime geçmesini destekleyecek biçimde hazırlanır.", 
    ]
];
?>

<?php foreach ($features as $item): ?>
<div class="p-6 shadow-lg shadow-slate-100 dark:shadow-slate-800 transition duration-500 rounded-2xl bg-white dark:bg-slate-800">
    <div
        class="size-16 bg-violet-600/5 text-violet-600 rounded-2xl flex align-middle justify-center items-center shadow-sm">
        <i class="<?php echo $item['icon']; ?>"></i>
    </div>

    <div class="content mt-6">
        <h3 class="text-lg hover:text-violet-600 dark:text-white dark:hover:text-violet-600 transition-all duration-500 ease-in-out font-semibold"><?php echo $item['title']; ?></h3>
        <p class="text-slate-700 dark:text-slate-400 mt-3"><?php echo $item['desc']; ?></p>

        <div class="mt-3">
            <a href="login.php"
                class="hover:text-violet-600 dark:hover:text-violet-600 after:bg-violet-600 text-slate-700 dark:text-slate-300 transition duration-500">İncele <i class="mdi mdi-arrow-right"></i></a>
        </div>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>
