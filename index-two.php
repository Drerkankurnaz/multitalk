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
        <section class="relative md:py-24 py-16 bg-gradient-to-tr to-violet-950 via-violet-700 from-fuchsia-600">
            <div class="absolute inset-0 bg-[url('../../<?php echo $static_url; ?>/images/bg/bg.png')] bg-no-repeat bg-top bg-cover opacity-20"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center mt-12">
                    <span class="text-yellow-400 font-semibold mb-3 uppercase">#OnlineLearning</span>
                    <h1 class="font-bold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl text-white mb-5">Diyaloglarla <br> Yabancı Dil Öğretimi</h1>
                    <p class="text-white/50 text-lg max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                    
                    <div class="mt-6">
                        <a href="" class="h-12 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-yellow-500 text-white">İçerikleri Gör <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container-fluid relative mt-10">
                <div class="grid grid-cols-5 items-center lg:gap-4 md:gap-2 gap-1 xl:mx-36 mx-3">
                    <div>
                        <img src="<?php echo $static_url; ?>/images/home/1.jpg" class="rounded-md shadow shadow-white/30" alt="">
                    </div>

                    <div class="grid md:grid-cols-1 grid-cols-1 lg:gap-4 md:gap-2 gap-1">
                        <div>
                            <img src="<?php echo $static_url; ?>/images/home/2.jpg" class="rounded-md shadow shadow-white/30" alt="">
                        </div>

                        <div>
                            <img src="<?php echo $static_url; ?>/images/home/3.jpg" class="rounded-md shadow shadow-white/30" alt="">
                        </div>
                    </div>

                    <div>
                        <img src="<?php echo $static_url; ?>/images/home/4.jpg" class="rounded-md shadow shadow-white/30" alt="">
                    </div>

                    <div class="grid md:grid-cols-1 grid-cols-1 lg:gap-4 md:gap-2 gap-1">
                        <div>
                            <img src="<?php echo $static_url; ?>/images/home/5.jpg" class="rounded-md shadow shadow-white/30" alt="">
                        </div>

                        <div>
                            <img src="<?php echo $static_url; ?>/images/home/6.jpg" class="rounded-md shadow shadow-white/30" alt="">
                        </div>
                    </div>

                    <div>
                        <img src="<?php echo $static_url; ?>/images/home/7.jpg" class="rounded-md shadow shadow-white/30" alt="">
                    </div>
                </div>
            </div>
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <span class="text-violet-600 font-semibold mb-3 uppercase">Temalar</span>
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Tematik Dil İçeriklerini Keşfedin</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                    
    <!-- categories code  -->
<?php
include "$base_dir/Home/categories.php";
?>

                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
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
                        <span class="text-violet-600 font-semibold mb-3 uppercase">Proje Yaklaşımı</span>
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

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <span class="text-violet-600 font-semibold mb-3 uppercase">İçerikler</span>
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Öne Çıkan İçerikler</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 relative mt-3">
                    <div class="tiny-home-slide-three">
                        
    <!-- courses2 code  -->
<?php
include "$base_dir/Home/courses2.php";
?>

                    </div><!--end tiny slider-->
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                    <div class="md:col-span-12 text-center">
                        <a href="grid.php" class="text-slate-400 hover:text-violet-600 duration-500 ease-in-out">Daha Fazla İçerik <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div><!--end grid-->
            </div><!--end conatiner-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <span class="text-violet-600 font-semibold mb-3 uppercase">Özellikler</span>
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
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <span class="text-violet-600 font-semibold mb-3 uppercase">Eğitmenler</span>
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
                    <span class="text-violet-600 font-semibold mb-3 uppercase">Görüşler</span>
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
        </section><!--end section-->
        <!-- End -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>