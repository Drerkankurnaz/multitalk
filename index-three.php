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
        <section class="relative table w-full md:py-44 py-36 bg-[url('../../<?php echo $static_url; ?>/images/bg/4.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-slate-950/90"></div>
            <div class="absolute inset-0 opacity-5 bg-[url('../../<?php echo $static_url; ?>/images/map.svg')] bg-no-repeat bg-center bg-cover"></div>
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-6">
                    <div class="lg:col-span-7 md:col-span-6">
                        <h1 class="font-semibold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl text-white mb-5">Diyalog Temelli <span class="font-bold text-yellow-400">İçerikler</span> <br> ile <span class="after:absolute after:end-0 after:start-0 after:bottom-3 after:-rotate-6 after:h-2 after:w-auto after:rounded-md after:bg-yellow-400/50 after:-z-1 z-1 relative">A1-A2</span> <br> Çevrimiçi Öğrenme</h1>
                        
                        <p class="text-white/50 text-lg max-w-xl">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                        
                        <div class="mt-6">
                            <form class="relative max-w-xl">
                                <input type="email" id="subemail" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-white rounded-full bg-slate-900/70 border border-slate-800" placeholder="E-posta adresiniz">
                                <button type="submit" class="h-12 px-6 tracking-wide items-center justify-center font-medium bg-yellow-500 text-white rounded-full absolute top-[1px] end-[1px]">Abone Ol</button>
                            </form><!--end form-->
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="grid grid-cols-1 relative xl:ms-20">
                            <div class="tiny-one-item">
                                
    <!-- courses3 code  -->
<?php
include "$base_dir/Home/courses3.php";
?>

                            </div><!--end tiny slider-->
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container -->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
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

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
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
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
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

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Proje Duyuruları</h4>

                    <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">                    
                    
    <!-- blogs code  -->
<?php
include "$base_dir/Home/blogs.php";
?>

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