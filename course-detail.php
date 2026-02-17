<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-dark.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'dark';

// Optionally define the Hero block content
ob_start();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$courses = [
    [
        'id' => 1,
        'img' => '/images/course/1.jpg', 
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
        'img' => '/images/course/2.jpg', 
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
        'img' => '/images/course/3.jpg', 
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
        'img' => '/images/course/4.jpg', 
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
        'img' => '/images/course/5.jpg', 
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
        'img' => '/images/course/6.jpg', 
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
        'img' => '/images/course/7.jpg', 
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
        'img' => '/images/course/8.jpg', 
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
        'img' => '/images/course/9.jpg', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$29', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Çevrimiçi İçerikler', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 10,
        'img' => '/images/course/10.jpg', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$15', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Günlük Yaşam İletişimi', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 11,
        'img' => '/images/course/11.jpg', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$24', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Dijital Öğrenme Becerileri', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ],
    [
        'id' => 12,
        'img' => '/images/course/12.jpg', 
        'img1' => '/images/team/2.jpg', 
        'name' => 'Calvin Carlo', 
        'price' => '$29', 
        'lessons' => '10 Ders', 
        'students' => '49 Öğrenici', 
        'title' => 'Temel Dil Becerilerini Geliştir', 
        'desc' => "A1-A2 düzeyinde, günlük yaşam iletişim senaryolarına uygun içerik.", 
    ]
];

$article = null;
if ($id === 0) {
    $article = $courses; // Use all articles when no ID is provided

} else {
    // Search for the article by ID
    foreach ($courses as $item) {
        if ($item['id'] === $id) {
            $article = $item;
            break;
        }
    }
}

if ($article === null) {
    echo "İçerik bulunamadı.";
    exit;
}
?>

        <!-- Searchbar modal -->
        <dialog id="navbarSearch" class="modal rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white w-11/12 max-w-5xl mt-20">
            <div class="relative w-full h-auto">
                <form method="dialog" class="modal-backdrop">
                    <button class="size-5 rounded-md flex justify-center items-center absolute top-0 end-0 btn-ghost"><i data-feather="x" class="size-4"></i></button>
                </form>
                <div class="p-6 text-center">
                    <form class="relative">
                        <i class="iconoir-search text-lg absolute top-2.5 end-0"></i>
                        <input type="text" class="w-full py-2 px-3 bg-transparent focus:outline-none rounded-md pe-6 h-10" name="s" id="searchItem" placeholder="Ara...">
                    </form>
                </div>
            </div>
        </dialog>
        <!-- Searchbar modal -->

        <!-- Start -->
        <section class="relative pt-32 md:pb-24 pb-16">
            <div class="container">
                <div class="md:flex justify-center">
                    <div class="lg:w-3/5">
                        <h3 class="text-3xl leading-normal font-medium">
                            <?php 
                                if (!empty($article['title'])) {
                                    // If article['title'] exists, display it
                                     echo $article['title']; 
                                } else {
                                    // If article['title'] does not exist, display this
                                    echo 'Become a Professional Graphic Designer'; 
                                }
                            ?>    
                        </h3>
                        <div class="flex items-center mx-auto mt-3">
                            <img src="<?php echo $static_url; ?>/images/team/2.jpg" class="size-8 rounded-full shadow-md dark:shadow-gray-800" alt="">
                            <a href="" class="font-semibold block ms-3">
                            <?php 
                                if (!empty($article['name'])) {
                                    // If article['name'] exists, display it
                                     echo $article['name']; 
                                } else {
                                    // If article['name'] does not exist, display this
                                    echo 'Calvin Carlo'; 
                                }
                            ?>     
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:flex justify-center text-center">
                    <div class="lg:w-4/5">
                        <ul class="tracking-[0.5px] mb-0 inline-block mt-4">
                            <li class="inline-flex items-center mt-2 me-5">
                                <i class="iconoir-clock text-lg"></i>
                                <span class="text-slate-400 ms-2">10 Hafta</span>
                            </li>
        
                            <li class="inline-flex items-center mt-2 me-5">
                                <i class="iconoir-wifi text-lg"></i>
                                <span class="text-slate-400 ms-2">Tüm Düzeyler</span>
                            </li>
                            
                            <li class="inline-flex items-center mt-2 me-5">
                                <i class="iconoir-book text-lg"></i>
                                <span class="text-slate-400 ms-2">
                                <?php 
                                    if (!empty($article['lessons'])) {
                                        // If article['lessons'] exists, display it
                                        echo $article['lessons']; 
                                    } else {
                                        // If article['lessons'] does not exist, display this
                                        echo '16 Ders'; 
                                    }
                                ?>
                                </span>
                            </li>
                            
                            <li class="inline-flex items-center mt-2 me-5">
                                <i class="iconoir-cube text-lg"></i>
                                <span class="text-slate-400 ms-2">0 Değerlendirme</span>
                            </li>
                            
                            <li class="inline-flex items-center mt-2 me-5">
                                <i class="iconoir-open-book text-lg"></i>
                                <span class="text-slate-400 ms-2">
                                <?php 
                                    if (!empty($article['students'])) {
                                        // If article['students'] exists, display it
                                        echo $article['students']; 
                                    } else {
                                        // If article['students'] does not exist, display this
                                        echo '5 Öğrenici'; 
                                    }
                                ?>
                                </span>
                            </li>
                            
                            <li class="inline-flex items-center mt-2">
                                <i class="iconoir-cart text-lg"></i>
                                <a href="" target="_blank" class="text-violet-600 ms-2">Hemen Başla</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="md:flex justify-center mt-6">
                    <div class="lg:w-full">
                        <div class="relative">
                            <img src="<?php echo !empty($article['img']) ? $static_url . $article['img'] : $static_url . '/images/course/1.jpg'; ?>" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                            <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                    class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-violet-600">
                                    <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:flex justify-center mt-10">
                    <div class="lg:w-3/5">
                        <h5 class="text-2xl font-semibold mb-4">Genel Bakış</h5>

                        <p class="text-slate-400 mb-3">Bu içerik, öğrenicinin günlük yaşam bağlamlarında doğru ifade ve tepki kalıplarını geliştirmesini hedefler.</p>
                        <p class="text-slate-400 mb-3">Diyaloglar; selamlaşma, bilgi isteme, yönlendirme ve temel etkileşim kalıplarını adım adım sunar.</p>
                        <p class="text-slate-400 mb-3">İçerik akışı, AOBM/CEFR kazanımlarıyla uyumlu olacak şekilde kısa, anlaşılır ve tekrar edilebilir bölümlerden oluşur.</p>
                        <p class="text-slate-400 mb-3">Kültürel bağlam ve sözsüz iletişim unsurları, hedef dilde iletişimsel yetkinliği destekleyecek şekilde yapılandırılmıştır.</p>
                        <p class="text-slate-400">Bu modül tamamlandığında öğrenici, temel düzeyde gerçek yaşam iletişim durumlarında daha güvenli ve akıcı etkileşim kurabilir.</p>

                        <img src="<?php echo $static_url; ?>/images/course/2.jpg" class="rounded-md shadow mt-4" alt="">

                        <div class="mt-6">
                            <h5 class="text-2xl font-semibold">İçerik Planı</h5>
                        </div>
        
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold mb-4">Başlangıç</h5>
    
                            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow shadow-slate-200 dark:shadow-slate-800 rounded-md">
                                <table class="w-full text-start">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-5 text-start">Dersler</th>
                                            <th class="px-4 py-5 text-end">Süre</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 1</a></td>
                                            <td class="p-4 text-end"><span class="bg-violet-600/10 text-violet-600 text-[12px] px-2.5 py-1 rounded-md h-4">Ücretsiz İzle</span></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 2</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 3</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 4</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold mb-4">Gelişim</h5>
                            
                            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow shadow-slate-200 dark:shadow-slate-800 rounded-md">
                                <table class="w-full text-start">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-5 text-start">Dersler</th>
                                            <th class="px-4 py-5 text-end">Süre</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 5</a></td>
                                            <td class="p-4 text-end"><span class="bg-violet-600/10 text-violet-600 text-[12px] px-2.5 py-1 rounded-md h-4">Ücretsiz İzle</span></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 6</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 7</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 8</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold mb-4">Değerlendirme</h5>
                            
                            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow shadow-slate-200 dark:shadow-slate-800 rounded-md">
                                <table class="w-full text-start">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-5 text-start">Dersler</th>
                                            <th class="px-4 py-5 text-end">Süre</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 9</a></td>
                                            <td class="p-4 text-end"><span class="bg-violet-600/10 text-violet-600 text-[12px] px-2.5 py-1 rounded-md h-4">Ücretsiz İzle</span></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 10</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 11</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 12</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
                        <div class="mt-6">
                            <h5 class="text-lg font-semibold mb-4">Ek İçerik</h5>
                            
                            <div class="relative overflow-x-auto block w-full bg-white dark:bg-slate-900 shadow shadow-slate-200 dark:shadow-slate-800 rounded-md">
                                <table class="w-full text-start">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-5 text-start">Dersler</th>
                                            <th class="px-4 py-5 text-end">Süre</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 13</a></td>
                                            <td class="p-4 text-end"><span class="bg-violet-600/10 text-violet-600 text-[12px] px-2.5 py-1 rounded-md h-4">Ücretsiz İzle</span></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 14</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 15</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
    
                                        <tr class="border-t border-slate-100 dark:border-slate-800">
                                            <td class="p-4"><a href="" class=""><i class="iconoir-clipboard-check text-lg align-middle me-1"></i> Lesson 16</a></td>
                                            <td class="p-4 text-end"><i class="iconoir-lock text-lg"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Güncel İçerikler</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- detail-course code  -->
<?php
include "$base_dir/Courses/detail-course.php";
?>

                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
            
    <!-- subscribe code  -->
<?php
include "$base_dir/Courses/subscribe.php";
?>
            
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>