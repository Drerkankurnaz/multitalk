<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-light.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'light';

// Optionally define the Hero block content
ob_start();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$blogs = [
    [
        'id' => 1,
        'img' => '/images/course/1.jpg', 
        'name' => 'Degree', 
        'title' => "The Future of Remote Work: Trending Now", 
    ],
    [
        'id' => 4,
        'img' => '/images/course/4.jpg', 
        'name' => 'HTML5', 
        'title' => "Demystifying Data Science: A Beginner’s", 
    ],
    [
        'id' => 5,
        'img' => '/images/course/5.jpg', 
        'name' => 'Institution', 
        'title' => "The Art of Effective Online Collaboration", 
    ],
    [
        'id' => 6,
        'img' => '/images/course/6.jpg', 
        'name' => 'Graduation', 
        'title' => "Student Success Stories: From Learning", 
    ],
    [
        'id' => 7,
        'img' => '/images/course/7.jpg', 
        'name' => 'Certification', 
        'title' => "Instructor Spotlight: Meet the Faces Behind", 
    ],
    [
        'id' => 8,
        'img' => '/images/course/8.jpg', 
        'name' => 'Frontend', 
        'title' => "Navigating the Job Market: Career Tips", 
    ],
    [
        'id' => 9,
        'img' => '/images/course/9.jpg', 
        'name' => 'Mobile', 
        'title' => "Building a Growth Mindset: Strategie", 
    ]
];

$article = null;
if ($id === 0) {
    $article = $blogs; // Use all articles when no ID is provided

} else {
    // Search for the article by ID
    foreach ($blogs as $item) {
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

        <!-- Start Hero -->
        <section class="relative table w-full py-32 lg:py-44 bg-[url('../../<?php echo $static_url; ?>/images/bg/3.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-3xl text-2xl md:leading-snug tracking-wide leading-snug font-medium text-white mb-3">
                    <?php 
                        if (!empty($article['title'])) {
                            // If article['title'] exists, display it
                            echo $article['title']; 
                        } else {
                            // If article['title'] does not exist, display this
                            echo 'The Future of Remote Work: Trending Now'; 
                        }
                    ?>    
                    </h3>

                    <ul class="list-none mt-6">
                        <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Yazar :</span> <span class="block">Calvin Carlo</span></li>
                        <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Tarih :</span> <span class="block">3rd Oct 2024</span></li>
                        <li class="inline-block text-white/50 mx-5"> <span class="text-white block">Süre :</span> <span class="block">8 Dakika</span></li>
                    </ul>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="lg:col-span-8 md:order-1 order-2">
                        <div class="relative overflow-hidden rounded-xl shadow dark:shadow-gray-800">

                            <img src="<?php echo !empty($article['img']) ? $static_url . $article['img'] : $static_url . '/images/course/1.jpg'; ?>" alt="">

                            <div class="p-6">
                                <p class="text-slate-400">Bu alanda, proje kapsamındaki içeriklerin guncel ozet metni yer almaktadir. Metinler AOBM/CEFR A1-A2 düzeyinde iletişimsel yetkinlik ve kültürlerarası etkileşim odagina gore duzenlenmistir.</p>
                                <p class="text-slate-400 italic border-x-4 border-violet-600 rounded-ss-xl rounded-ee-xl mt-3 p-3">" İçerikler, günlük yaşam iletişim senaryoları ve hedef dilin kültürel bağlamını destekleyecek biçimde geliştirilmiştir. "</p>
                                <p class="text-slate-400 mt-3">Bu metinler, öğrenicinin dikkatini gerçek yaşam iletişim bağlamına yönlendirecek biçimde sade ve işlevsel olarak hazırlanmıştır.</p>
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-6">
                            <h5 class="text-lg font-semibold">Yorum Bırakın:</h5>

                            <form class="mt-6">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="name" class="font-semibold">Ad Soyad:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                                <input name="name" id="name" type="text" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 ps-11" placeholder="Ad Soyad">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="email" class="font-semibold">E-posta:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                <input name="email" id="email" type="email" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 ps-11" placeholder="ornek@eposta.com">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="comments" class="font-semibold">Mesaj:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md ps-11 h-28" placeholder="Mesajınızı yazın"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white w-full">Mesaj Gönder</button>
                            </form>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-4 md:order-2 order-1">
                        <div class="sticky top-20 p-6 bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700">
                            <form>
                                <div>
                                    <label for="searchname" class="font-semibold">Bloglarda Ara</label>
                                    <div class="relative mt-2">
                                        <i data-feather="search" class="absolute top-[10px] start-3 size-5"></i>
                                        <input name="search" id="searchname" type="text" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 ps-10" placeholder="Ara">
                                    </div>
                                </div>
                            </form>

                            <div class="mt-6">
                                <h5 class="font-semibold">Son Gönderiler</h5>
                                <div class="flex items-center mt-4">
                                    <img src="<?php echo $static_url; ?>/images/course/6.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                    <div class="ms-3">
                                        <a href="" class="font-medium hover:text-violet-600">Proje Çıktılarında İletişimsel Yaklaşım</a>
                                        <p class="text-sm text-slate-400">2nd Oct 24</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center mt-4">
                                    <img src="<?php echo $static_url; ?>/images/course/7.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                    <div class="ms-3">
                                        <a href="" class="font-medium hover:text-violet-600">A1-A2 Düzeyi İçin Diyalog Tasarımı</a>
                                        <p class="text-sm text-slate-400">2nd Oct 24</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center mt-4">
                                    <img src="<?php echo $static_url; ?>/images/course/8.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                    <div class="ms-3">
                                        <a href="" class="font-medium hover:text-violet-600">Kültürlerarası İletişimde Temel İlkeler</a>
                                        <p class="text-sm text-slate-400">2nd Oct 24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <h5 class="font-semibold">Sosyal</h5>
                                <ul class="list-none mt-4">
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="facebook" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="instagram" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="twitter" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="linkedin" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="github" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="youtube" class="size-4"></i></a></li>
                                    <li class="inline"><a href="" class="size-7 inline-flex justify-center items-center text-slate-400 hover:text-white border border-slate-100 dark:border-slate-800 rounded-md hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600"><i data-feather="gitlab" class="size-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">İlgili Duyurular</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">                    
                    
    <!-- blogs code  -->
<?php
include "$base_dir/Home/blogs.php";
?>

                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1">
                    <div class="relative bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-lg shadow shadow-slate-200 dark:shadow-slate-800 overflow-hidden">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-6">
                            <div class="md:text-start text-center z-1">
                                <h3 class="mb-2 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Bültene Abone Olun</h3>
                                <p class="text-slate-400 max-w-xl mx-auto">Proje kapsamındaki yeni içerik ve güncellemeleri e-posta ile takip edin.</p>
                            </div>
            
                            <div class="z-1">
                                <form class="relative mx-auto max-w-xl">
                                    <input type="email" id="subemail" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-slate-100 dark:border-slate-800" placeholder="E-posta adresiniz">
                                    <button type="submit" class="h-12 px-6 tracking-wide items-center justify-center font-medium bg-violet-600 text-white rounded-full absolute top-[1px] end-[1px]">Abone Ol</button>
                                </form><!--end form-->
                            </div>
                        </div>
            
                        <div class="absolute -top-5 -start-5">
                            <div class="iconoir-mail lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                        </div>
            
                        <div class="absolute -bottom-5 -end-5">
                            <div class="iconoir-edit-pencil lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
