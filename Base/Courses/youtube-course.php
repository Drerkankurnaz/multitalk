<?php
$courses = [
    [
        'id' => 1,
        'video' => 'https://www.youtube.com/embed/yba7hPeTSjk?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$0', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Temel Diyalog Paketi', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 2,
        'video' => 'https://www.youtube.com/embed/cWIxnvW4YJs?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$19', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Uygulamalı İletişim İçeriği', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 3,
        'video' => 'https://www.youtube.com/embed/S_CGed6E610?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$29', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Konuşma Odaklı Dil İçeriği', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 4,
        'video' => 'https://www.youtube.com/embed/SGrnFOdEiTM?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$15', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'İleri Düzey İletişim Uygulamaları', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 5,
        'video' => 'https://www.youtube.com/embed/xVVyXI7Opv4?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$24', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Temel İletişim Kalıpları', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 6,
        'video' => 'https://www.youtube.com/embed/sL8QHyzWtuI?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$29', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Tematik Diyalog Uygulamaları', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 7,
        'video' => 'https://www.youtube.com/embed/qzR62JJCMBQ?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$15', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Dil Öğreniminde Diyalog Yaklaşımı', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 8,
        'video' => 'https://www.youtube.com/embed/arj7oStGLkU?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$24', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Öğrenmede Sık Karşılaşılan Durumlar', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 9,
        'video' => 'https://www.youtube.com/embed/U6FvJ6jMGHU?feature=oembed', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$29', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Çevrimiçi İçerikler', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ]
];
?>

<?php foreach ($courses as $item): ?>
<div
    class="group bg-white dark:bg-slate-900 rounded-md shadow-md hover:shadow-lg shadow-slate-100 dark:shadow-slate-800 transition duration-500">
    <div class="p-3 pb-0 relative">
        <iframe src="<?php echo $item['video']; ?>" allow="autoplay; encrypted-media"
            class="w-full rounded-md h-44" allowfullscreen=""></iframe>
        <div class="absolute start-6 top-6">
            <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 rounded-md h-4">Free</span>
            <span class="bg-violet-600 text-white text-[12px] px-2.5 py-1 rounded-md h-4">Event</span>
        </div>

        <div class="absolute -bottom-5 end-6">
            <span
                class="bg-violet-600 text-white size-10 flex items-center justify-center rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 font-semibold"><?php echo $item['price']; ?></span>
        </div>
    </div>

    <div class="p-6">
        <div class="flex mb-3">
            <span class="text-slate-400 text-sm flex items-center"><i data-feather="book"
                    class="text-slate-900 dark:text-white size-[14px] me-1"></i><?php echo $item['lessons']; ?></span>
            <span class="text-slate-400 text-sm flex items-center ms-3"><i data-feather="users"
                    class="text-slate-900 dark:text-white size-[14px] me-1"></i><?php echo $item['students']; ?></span>
        </div>

        <a href="course-detail.php?id=<?php echo $item['id']; ?>"
            class="text-lg hover:text-violet-600 font-medium"><?php echo $item['title']; ?></a>

        <p class="text-slate-400 mt-2"><?php echo $item['desc']; ?></p>

        <div class="flex justify-between mt-3">
            <span class="flex items-center"><img src="<?php echo $static_url, $item['img1']; ?>"
                    class="size-8 rounded-full shadow shadow-slate-100 dark:shadow-slate-800 me-2" alt=""> <a href=""
                    class="hover:text-violet-600 font-medium"> <?php echo $item['name']; ?></a></span>
            <a href=""
                class="h-8 px-3 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white text-sm">İncele
                <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
        </div>
    </div>
</div>
<!--end content-->
<?php endforeach; ?>