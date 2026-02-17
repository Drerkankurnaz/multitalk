<?php
$reviews = [
    [
        'img' => '/images/team/4.jpg', 
        'name' => 'Paul Phelan', 
        'title' => "Öğrenici", 
        'desc' => "Tematik diyaloglar sayesinde günlük iletişim durumlarını daha kolay kavradım. Özellikle bağlam içinde öğrenmek konuşma güvenimi artırdı.", 
    ],
    [
        'img' => '/images/team/5.jpg', 
        'name' => 'Christa Smith', 
        'title' => "Öğrenici", 
        'desc' => "A1-A2 düzeyine uygun kısa videolarla düzenli çalışabildim. Altyazı desteği ve tekrar edilebilir içerikler öğrenmeyi sürdürülebilir hale getirdi.", 
    ],
    [
        'img' => '/images/team/6.jpg', 
        'name' => 'Calvin Carlo', 
        'title' => "Öğrenici", 
        'desc' => "Sekiz dilde aynı tematik yapının sunulması çok yararlıydı. Kültürel bağlama dayalı diyaloglar, yalnızca kelime değil iletişim biçimlerini de öğretti.", 
    ]
];
?>

<?php foreach ($reviews as $item): ?>
<div class="tiny-slide">
    <div class="mx-3">
        <ul class="text-md font-medium text-amber-500 list-none mb-2">
            <li class="inline"><i class="mdi mdi-star"></i></li>
            <li class="inline"><i class="mdi mdi-star"></i></li>
            <li class="inline"><i class="mdi mdi-star"></i></li>
            <li class="inline"><i class="mdi mdi-star"></i></li>
            <li class="inline"><i class="mdi mdi-star"></i></li>
        </ul>

        <p class="text-lg text-slate-400"> " <?php echo $item['desc']; ?> " </p>

        <div class="flex items-center mt-3">
            <img src="<?php echo $static_url, $item['img']; ?>"
                class="size-12 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800" alt="">
            <div class="ms-2">
                <h6 class="font-semibold"><?php echo $item['name']; ?></h6>
                <span class="text-slate-400 text-sm"><?php echo $item['title']; ?></span>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
