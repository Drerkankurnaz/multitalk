<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-tagline-dark.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'tagline-dark';

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
        <section class="relative overflow-hidden md:py-44 py-36">
            <div class="container relative md:mt-16 mt-6">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-7">
                        <h6 class="text-yellow-500 font-semibold mb-3 uppercase">SBA-2023-2306 Projesi</h6>
                        <h1 class="font-bold lg:leading-normal leading-normal tracking-wide text-4xl lg:text-5xl mb-5">Diyaloglarla Yabancı Dil Öğretimi <br> <span class="bg-gradient-to-l from-fuchsia-500 to-violet-600 text-transparent bg-clip-text">A1-A2 Odaklı</span></h1>
                        <p class="text-slate-400 text-lg max-w-xl">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                        
                        <div class="mt-6">
                            <a href="" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">İçerikleri Keşfet <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="size-10 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white ms-1 lightbox"><i data-feather="video" class="h-4 w-4"></i></a><span class="font-medium text-slate-400 dark:text-white/80 ms-1 align-middle"> Videoyu İzle</span>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-5">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="relative md:shrink-0">
                                <img src="<?php echo $static_url; ?>/images/course/1.jpg" class="xl:size-56 lg:size-44 md:size-40 size-44 object-cover shadow shadow-slate-100 dark:shadow-slate-800 rounded-s-full" alt="">

                                <div class="overflow-hidden after:content-[''] after:absolute after:size-12 after:bg-fuchsia-500 after:top-0 after:-start-6 after:-z-1 after:rounded-full"></div>
                            </div><!--end content-->
                            
                            <div class="relative md:shrink-0">
                                <img src="<?php echo $static_url; ?>/images/course/2.jpg" class="xl:size-56 lg:size-44 md:size-40 size-44 object-cover shadow shadow-slate-100 dark:shadow-slate-800 rounded-full" alt="">
                                
                                <div class="overflow-hidden after:content-[''] after:absolute after:size-24 after:bg-violet-600/40 after:-top-10 after:-end-0 after:-z-1 after:rounded-lg after:rotate-[36deg]"></div>
                            </div><!--end content-->
                            
                            <div class="relative md:shrink-0">
                                <img src="<?php echo $static_url; ?>/images/course/3.jpg" class="xl:size-56 lg:size-44 md:size-40 size-44 object-cover shadow shadow-slate-100 dark:shadow-slate-800 rounded-xl" alt="">
                                
                                <div class="overflow-hidden after:content-[''] after:absolute after:size-40 after:bg-yellow-400 after:-bottom-10 after:-start-10 after:-z-1 after:rounded-full"></div>
                            </div><!--end content-->
                            
                            <div class="relative md:shrink-0">
                                <img src="<?php echo $static_url; ?>/images/course/4.jpg" class="xl:size-56 lg:size-44 md:size-40 size-44 object-cover shadow shadow-slate-100 dark:shadow-slate-800 rounded-e-full" alt="">
                                
                                <div class="overflow-hidden after:content-[''] after:absolute after:size-6 after:bg-violet-600/60 after:bottom-10 after:-end-12 after:-z-1 after:rounded-md"></div>
                                <div class="overflow-hidden after:content-[''] after:absolute after:size-6 after:bg-fuchsia-500/60 after:-bottom-12 after:start-10 after:-z-1 after:rounded-full"></div>
                            </div><!--end content-->
                        </div><!--end grid-->
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative py-12 bg-violet-600">
            <div class="container relative">
                <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                    <div class="lg:col-start-2 lg:col-span-10">
                        <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-2 items-center gap-6">
                            
    <!-- cta2 code  -->
<?php
include "$base_dir/Home/cta2.php";
?>

                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
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

            <div class="container relative md:mt-24 mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-6 md:col-span-7">
                        <div class="relative">
                            <div class="relative md:shrink-0 lg:mx-0 mx-5">
                                <img class="object-cover md:w-96 w-84 h-[500px] rounded-lg shadow-md dark:shadow-gyay-700" src="<?php echo $static_url; ?>/images/course/4.jpg" alt="">
                            </div>

                            <div class="absolute bottom-10 lg:end-6 end-0">
                                <div class="relative z-1 top-10 xl:text-start lg:text-end text-end">
                                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="lightbox size-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-violet-600 text-white">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
    
                                <div class="relative md:shrink-0">
                                    <img class="object-cover size-48 rounded-lg shadow-md dark:shadow-gyay-700" src="<?php echo $static_url; ?>/images/course/2.jpg" alt="">
                                </div>
                            </div>

                            <div class="absolute md:top-16 top-12 md:-start-10 -start-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 w-56 z-2 mover">
                                <h5 class="font-semibold mb-3">Proje Ekibi</h5>
                                
                                <ul class="list-none relative">
                                    <li class="inline-block relative"><a href=""><img src="<?php echo $static_url; ?>/images/team/1.jpg" class="size-10 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                    <li class="inline-block relative -ms-4"><a href=""><img src="<?php echo $static_url; ?>/images/team/2.jpg" class="size-10 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                    <li class="inline-block relative -ms-4"><a href=""><img src="<?php echo $static_url; ?>/images/team/3.jpg" class="size-10 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                    <li class="inline-block relative -ms-4"><a href=""><img src="<?php echo $static_url; ?>/images/team/4.jpg" class="size-10 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                    <li class="inline-block relative -ms-4"><a href=""><img src="<?php echo $static_url; ?>/images/team/5.jpg" class="size-10 rounded-full shadow-md shadow-slate-100 dark:shadow-slate-800 border-4 border-white dark:border-slate-900 relative hover:z-1 hover:scale-105 transition-all duration-500" alt=""></a></li>
                                    <li class="inline-block relative -ms-4"><a href="" class="size-9 table-cell tracking-wide align-middle text-base text-center rounded-full bg-violet-600 text-white hover:z-1 hover:scale-105 transition-all duration-500"><i class="mdi mdi-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-6 md:col-span-5">
                        <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Sık Sorulan Sorular</h4>
                        <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>

                        <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden">
                                <h2 class="font-medium" id="accordion-collapse-heading-1">
                                    <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                        <span>Proje nasıl işler?</span>
                                        <svg data-accordion-icon class="size-5 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">Bu bölümdeki açıklamalar, proje kapsamı ve uygulama süreçleri doğrultusunda güncellenmiştir.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="font-medium" id="accordion-collapse-heading-2">
                                    <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                        <span>İçeriklere nasıl erişebilirim?</span>
                                        <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">Bu bölümdeki açıklamalar, proje kapsamı ve uygulama süreçleri doğrultusunda güncellenmiştir.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="font-medium" id="accordion-collapse-heading-3">
                                    <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                        <span>A1 ve A2 düzeyleri nasıl kullanılır?</span>
                                        <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">Bu bölümdeki açıklamalar, proje kapsamı ve uygulama süreçleri doğrultusunda güncellenmiştir.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                <h2 class="font-medium" id="accordion-collapse-heading-4">
                                    <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                        <span>İlerlememi nasıl takip edebilirim?</span>
                                        <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                    <div class="p-5">
                                        <p class="text-slate-400 dark:text-gray-400">Bu bölümdeki açıklamalar, proje kapsamı ve uygulama süreçleri doğrultusunda güncellenmiştir.</p>
                                    </div>
                                </div>
                            </div>
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
        </section><!--end section-->
        <!-- Start -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>