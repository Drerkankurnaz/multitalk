<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets';

// Include the common navlink content
ob_start();
include "$base_dir/navbar-light.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'light';

// Optionally define the Hero block content
ob_start();
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
        <section class="relative overflow-hidden md:h-screen flex items-center py-36 bg-white dark:bg-slate-900 bg-[url('../../assets/images/bg/bg.png')] bg-center bg-no-repeat bg-cover" id="home">
            <div class="container relative">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-6 items-center">
                    <div>
                        <h1 class="font-semibold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl mb-5 text-slate-900 dark:text-white">Diyaloglarla <span class="font-bold">Yabancı Dil</span> Öğretimi <br> <span class="font-bold">MultiTalk</span></h1>
                        <p class="text-slate-700 dark:text-slate-300 text-lg max-w-xl">Anadolu Üniversitesi’nin SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde sekiz dilde hazırlanan tematik diyaloglarla, iletişim becerilerini merkeze alan etkili bir öğrenme deneyimi sunuyoruz.</p>
                    </div>

                    <div class="lg:ms-8">
                        <div class="relative">
                            <img src="<?php echo $static_url; ?>/images/hero/1.png" class="mx-auto" alt="">
    
                            <div class="overflow-hidden after:content-[''] after:absolute after:size-10 after:bg-violet-600/20 after:top-0 after:start-0 after:-z-1 after:rounded-lg after:animate-[spin_10s_linear_infinite]"></div>

                            <div class="overflow-hidden absolute md:size-[500px] size-[400px] bg-gradient-to-tl from-violet-600 to-fuchsia-600 bottom-1/2 translate-y-1/2 md:start-0 start-1/2 md:translate-x-0 -translate-x-1/2 -z-1 shadow-md shadow-violet-600/10 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-slate-50 dark:bg-slate-800">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-6 md:col-span-7">
                        <div class="relative">
                            <div class="relative md:shrink-0 lg:me-0 me-10">
                                <img class="object-cover md:w-96 w-84 h-[500px] rounded-lg shadow-md dark:shadow-gray-700" src="<?php echo $static_url; ?>/images/course/1.jpg" alt="">
                            </div>

                            <div class="absolute bottom-10 lg:end-6 end-0">
                                <div class="relative z-1 top-10 xl:text-start lg:text-end text-end">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox size-20 rounded-full shadow-md dark:shadow-gray-700 inline-flex items-center justify-center bg-violet-600 text-white">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
    
                                <div class="relative md:shrink-0">
                                    <img class="object-cover size-48 rounded-lg shadow-md dark:shadow-gray-700" src="<?php echo $static_url; ?>/images/course/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-6 md:col-span-5">
                        <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Proje Kapsamı ve Amacı</h4>
                        <p class="text-slate-700 dark:text-slate-400 max-w-xl mx-auto">SBA-2023-2306 sonuç raporunda belirtildiği üzere proje, yabancı dil öğretiminde yalnızca dilbilgisi ve sözcük bilgisini değil; iletişim bağlamı, kültürel normlar ve sözsüz iletişim ögelerini de içeren iletişimsel yetkinliği geliştirmeyi hedefler.</p>

                        <div class="grid md:grid-cols-2 mt-4">
                            <ul class="list-none">
                                <li class="mt-2 text-[16px] text-slate-700 dark:text-slate-400"><i class="mdi mdi-circle-medium"></i> <span>İletişimsel ve kültürlerarası yetkinlik odaklı</span></li>
                                <li class="mt-2 text-[16px] text-slate-700 dark:text-slate-400"><i class="mdi mdi-circle-medium"></i> <span>AOBM/CEFR A1-A2 kazanımlarıyla uyumlu</span></li>
                            </ul>

                            <ul class="list-none">
                                <li class="mt-2 text-[16px] text-slate-700 dark:text-slate-400"><i class="mdi mdi-circle-medium"></i> <span>Türkçe dahil 8 dilde tematik diyalog içeriği</span></li>
                                <li class="mt-2 text-[16px] text-slate-700 dark:text-slate-400"><i class="mdi mdi-circle-medium"></i> <span>Doğal yaşam iletişim durumlarına dayalı kurgu</span></li>
                            </ul>
                        </div>

                        <div class="mt-6">
                            <a href="aboutus.php" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white">Detayli Bilgi <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16 bg-white dark:bg-slate-900 py-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Raporla Uyumlu Öğrenme Özellikleri</h4>

                    <p class="text-slate-700 dark:text-slate-300 max-w-xl mx-auto">Platform özellikleri, sonuç raporunda vurgulanan günlük yaşam iletişim durumları, diyalog temelli öğretim ve temel kullanıcı düzeyindeki (A1-A2) dil öğrenme hedefleri esas alınarak yapılandırılmıştır.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- features code  -->
<?php
include "$base_dir/Home/features.php";
?>

                </div>
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16 bg-slate-50 dark:bg-slate-800 py-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Günlük Yaşam Temaları</h4>
                    <p class="text-slate-700 dark:text-slate-300 max-w-xl mx-auto">Tematik diyaloglar; alışveriş, sağlık, konaklama ve sosyal etkileşim gibi sık karşılaşılan iletişim durumları için A1-A2 düzeyinde hazırlanmıştır.</p>
                </div><!--end grid-->
            
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- courses code  -->
<?php
include "$base_dir/Home/courses.php";
?>

                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                    <div class="md:col-span-12 text-center">
                        <a href="themes.php" class="text-slate-700 dark:text-slate-400 hover:text-violet-600 dark:hover:text-violet-500 duration-500 ease-in-out">Tüm Temaları Gör <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container-fluid relative overflow-hidden md:mt-24 mt-16">
                <div class="bg-violet-600 md:pt-0 pt-16 bg-[url('../../<?php echo $static_url; ?>/images/bg/bg.png')] bg-no-repeat bg-top bg-cover">
                    <div class="container relative">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-6 items-center">
                            <div class="lg:col-span-8 md:col-span-7">
                                <div class="md:text-start text-center z-1">
                                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white">Proje Gelişmelerini Takip Edin</h3>
                                    <p class="text-white/50 max-w-xl mt-1">SBA-2023-2306 kapsamında yayımlanan içerik, çıktı ve güncellemelerden haberdar olun.</p>
                                </div>

                                <div class="mt-4">
                                    <form class="relative max-w-2xl">
                                        <input type="email" id="subscribe" name="email" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-white rounded-full bg-violet-700 shadow shadow-slate-100/20 dark:shadow-slate-800/20" placeholder="E-posta adresiniz">
                                        <button type="submit" class="h-12 px-6 tracking-wide items-center justify-center font-medium bg-yellow-500 text-white rounded-full absolute top-[1px] end-[1px]">Abone Ol</button>
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->

                            <div class="lg:col-span-4 md:col-span-5">
                                <div class="relative">
                                    <img src="<?php echo $static_url; ?>/images/hero/2.png" class="mx-auto relative z-2" alt="">
                                    <div class="absolute overflow-hidden size-[350px] bg-gradient-to-tl from-violet-600/20 to-fuchsia-600 bottom-0 translate-x-1/2 start-1/2 ltr:-translate-x-1/2 rtl:md:translate-x-0 rtl:translate-x-1/2 z-1 shadow-md shadow-red-500/10 rounded-full"></div>
                                </div>
                            </div><!--end col-->
                        </div><!--grid-->
                    </div><!--end container-->
                </div>
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16 bg-white dark:bg-slate-900 py-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Sonuç Raporu Odakları</h4>

                    <p class="text-slate-700 dark:text-slate-300 max-w-xl mx-auto">Raporun temel odağı; dil öğrenicilerinin gerçek yaşam bağlamlarında iletişime geçebilmesini destekleyen diyaloglar ve kültürlerarası iletişim becerilerinin geliştirilmesidir.</p>
                </div><!--end grid-->

            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16 bg-slate-50 dark:bg-slate-800 py-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-slate-900 dark:text-white">Proje Duyuruları</h4>

                    <p class="text-slate-700 dark:text-slate-300 max-w-xl mx-auto">Yayınlanan çıktılar, içerik güncellemeleri ve uygulama duyuruları bu alanda paylaşılır.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">                    
                    
    <!-- blogs code  -->
<?php
include "$base_dir/Home/blogs.php";
?>

                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
