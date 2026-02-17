<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-tagline-light.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'tagline-light';

// Optionally define the Hero block content
ob_start();
?>
        

        <!-- Searchbar modal -->
        <dialog id="navbarSearch" class="modal rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900 text-slate-900 dark:text-white w-11/12 max-w-5xl md:mt-32 mt-20">
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
        <section class="swiper mySwiper swiper-slider-hero relative block h-screen" id="home">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center overflow-hidden">
                    <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-[url('../../<?php echo $static_url; ?>/images/bg/2.jpg')] bg-center;">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="container relative md:mt-16">
                            <div class="grid grid-cols-1">
                                <div class="text-center">
                                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Diyalog Temelli Öğrenmeyle <br> Potansiyelinizi Geliştirin</h1>
                                    <p class="text-white/70 text-lg max-w-xl mx-auto">SBA-2023-2306 kapsamında geliştirilen içerikler, AOBM/CEFR A1-A2 düzeyinde iletişimsel yetkinlik kazanımını destekler.</p>
                                    
                                    <div class="mt-6">
                                        <a href="" class="h-12 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">İletişim <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </div><!-- end slide-inner --> 
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide flex items-center overflow-hidden">
                    <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-[url('../../<?php echo $static_url; ?>/images/bg/3.jpg')] bg-center;">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="container relative md:mt-16">
                            <div class="grid grid-cols-1">
                                <div class="text-center">
                                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Hedefinize Uygun <br> Dil İçeriklerini Seçin</h1>
                                    <p class="text-white/70 text-lg max-w-xl mx-auto">SBA-2023-2306 kapsamında geliştirilen içerikler, AOBM/CEFR A1-A2 düzeyinde iletişimsel yetkinlik kazanımını destekler.</p>
                                    
                                    <div class="mt-6">
                                        <a href="" class="h-12 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">Öğrenmeye Başla <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </div><!-- end slide-inner --> 
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide flex items-center overflow-hidden">
                    <div class="slide-inner absolute start-0 top-0 w-full h-full slide-bg-image flex items-center bg-[url('../../<?php echo $static_url; ?>/images/bg/4.jpg')] bg-center;">
                        <div class="absolute inset-0 bg-black/70"></div>
                        <div class="container relative md:mt-16">
                            <div class="grid grid-cols-1">
                                <div class="text-center">
                                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5">Diyaloglarla <br> Öğrenme Yolculuğu</h1>
                                    <p class="text-white/70 text-lg max-w-xl mx-auto">SBA-2023-2306 kapsamında geliştirilen içerikler, AOBM/CEFR A1-A2 düzeyinde iletişimsel yetkinlik kazanımını destekler.</p>
                                    
                                    <div class="mt-6">
                                        <a href="" class="h-12 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">Öğrenmeye Başla <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                                    </div>
                                </div>
                            </div><!--end grid-->
                        </div><!--end container-->
                    </div><!-- end slide-inner --> 
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <!-- <div class="swiper-pagination"></div> -->
            <div class="swiper-button-next bg-transparent size-[35px] leading-[35px] -mt-[30px] bg-none border border-solid border-white/50 text-white hover:bg-indigo-600 hover:border-indigo-600 rounded-full text-center"></div>
            <div class="swiper-button-prev bg-transparent size-[35px] leading-[35px] -mt-[30px] bg-none border border-solid border-white/50 text-white hover:bg-indigo-600 hover:border-indigo-600 rounded-full text-center"></div>        
        </section><!--end section-->
        <!-- Hero End -->

        <div class="container relative -mt-12 z-1">
            <div class="flex justify-center">
                <div class="lg:w-3/4 md:w-11/12 p-6 bg-white dark:bg-slate-900 rounded-xl shadow shadow-slate-100 dark:shadow-slate-800">
                    <form class="relative mx-auto">
                        <input type="text" id="searchCourse" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-slate-100 dark:border-slate-800" placeholder="Ara...">
                        <button type="submit" class="h-12 px-6 tracking-wide items-center justify-center font-medium bg-violet-600 text-white rounded-full absolute top-[1px] end-[1px]">Ara</button>
                    </form><!--end form-->
                </div>
            </div>
        </div>

        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-6 md:col-span-7">
                        <div class="relative">
                            <div class="relative md:shrink-0 lg:me-0 me-10">
                                <img class="object-cover md:w-96 w-84 h-[500px] rounded-lg shadow-md dark:shadow-gyay-700" src="<?php echo $static_url; ?>/images/course/1.jpg" alt="">
                            </div>

                            <div class="absolute bottom-10 lg:end-6 end-0">
                                <div class="relative z-1 top-10 xl:text-start lg:text-end text-end">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox size-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-violet-600 text-white">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
    
                                <div class="relative md:shrink-0">
                                    <img class="object-cover size-48 rounded-lg shadow-md dark:shadow-gyay-700" src="<?php echo $static_url; ?>/images/course/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-6 md:col-span-5">
                        <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Öğrenmeye Erişim <br> Her Zaman ve Her Yerde</h4>
                        <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 raporunda belirtildiği üzere içerikler, günlük yaşam iletişim durumları ve kültürlerarası etkileşim odağında hazırlanmıştır.</p>

                        <div class="grid md:grid-cols-2 mt-4">
                            <ul class="list-none">
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">Esnek çalışma ritmi</span></li>
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">Diyalog temelli öğrenme</span></li>
                            </ul>

                            <ul class="list-none">
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">Erişilebilir dijital içerik</span></li>
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">AOBM/CEFR uyumlu yapı</span></li>
                            </ul>
                        </div>

                        <div class="mt-6">
                            <a href="" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white">Detaylı Bilgi <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Raporla Uyumlu Öğrenme Özellikleri</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- features code  -->
<?php
include "$base_dir/Home/features.php";
?>

                </div>
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Öne Çıkan İçerikler</h4>
                    
                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->
                
                <div class="grid lg:grid-cols-2 mt-6 gap-6">
                    
    <!-- courses4 code  -->
<?php
include "$base_dir/Home/courses4.php";
?>

                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                    <div class="md:col-span-12 text-center">
                        <a href="list.php" class="text-slate-400 hover:text-violet-600 duration-500 ease-in-out">Daha Fazla İçerik <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Uzman Eğitmenler</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- instructors code  -->
<?php
include "$base_dir/Home/instructors.php";
?>

                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Katılımcı Görüşleri</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="flex justify-center relative mt-6">
                    <div class="relative w-full">
                        <div class="tiny-three-item">
                            
    <!-- reviews code  -->
<?php
include "$base_dir/Home/reviews.php";
?>

                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                
    <!-- get-in-touch code  -->
<?php
include "$base_dir/Home/get-in-touch.php";
?>

            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>