<?php
$themes = [
    ['icon' => 'mdi-cart', 'title' => 'Süpermarkette', 'desc' => 'Alışveriş süreçlerinde temel soru-cevap ve işlem diyalogları.'],
    ['icon' => 'mdi-silverware-fork-knife', 'title' => 'Restoranda', 'desc' => 'Sipariş verme, tercih belirtme ve sosyal nezaket kalıpları.'],
    ['icon' => 'mdi-bed', 'title' => 'Otelde', 'desc' => 'Rezervasyon, giriş-çıkış ve konaklama iletişimi.'],
    ['icon' => 'mdi-hospital-building', 'title' => 'Hastanede', 'desc' => 'Randevu, durum anlatma ve yönlendirme etkileşimleri.'],
    ['icon' => 'mdi-pill', 'title' => 'Eczanede', 'desc' => 'İlaç talebi, kullanım bilgisi alma ve danışma konuşmaları.'],
    ['icon' => 'mdi-bank', 'title' => 'Bankada', 'desc' => 'Günlük finansal işlemlerde temel iletişim kalıpları.'],
    ['icon' => 'mdi-city', 'title' => 'Şehirde', 'desc' => 'Yol sorma, ulaşım ve kamu alanı iletişim senaryoları.'],
    ['icon' => 'mdi-heart', 'title' => 'Düğünde', 'desc' => 'Tebrik, tanışma ve kültürel sosyal etkileşim diyalogları.'],
];
?>

<?php foreach ($themes as $item): ?>
<div class="group bg-white dark:bg-slate-900 rounded-md shadow-md hover:shadow-lg shadow-slate-100 dark:shadow-slate-800 transition duration-500 border border-slate-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-4">
            <span class="inline-flex items-center justify-center size-12 rounded-xl bg-violet-600/10 text-violet-600">
                <i class="mdi <?php echo $item['icon']; ?> text-2xl"></i>
            </span>
            <span class="text-[12px] px-2.5 py-1 rounded-md bg-violet-600 text-white">A1-A2</span>
        </div>

        <h5 class="text-lg font-semibold text-slate-900 dark:text-white"><?php echo $item['title']; ?></h5>
        <p class="text-slate-400 mt-2"><?php echo $item['desc']; ?></p>

        <div class="mt-4">
            <a href="themes.php" class="h-8 px-3 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white text-sm">
                Temayı İncele <i class="mdi mdi-arrow-right align-middle ms-1"></i>
            </a>
        </div>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>
