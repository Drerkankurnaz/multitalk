<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/assets'; // Ensure this is the correct path

// Include the common navlink content
ob_start();
include "$base_dir/navbar-dark1.php"; // This file contains the shared navlink content
$navlink_content = ob_get_clean(); // Capture the navlink content
$page= 'dark1';

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
        <section class="relative py-5 bg-slate-50 dark:bg-slate-800 mt-[74px]">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-2 items-center">
                    <div class="lg:col-span-5 md:col-span-4">
                        <h3 class="text-2xl md:leading-normal leading-normal font-semibold">İçerikler</h3>
                    </div>

                    <div class="lg:col-span-7 md:col-span-8 md:text-end">
                        <ul class="tracking-[0.5px] mb-0 inline-block">
                            <li class="inline-block text-slate-400 dark:text-white/60 duration-500 ease-in-out hover:text-violet-600 dark:hover:text-white"><a href="index.php">MultiTalk</a></li>
                            <li class="inline-block text-slate-500 dark:text-white/60 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="iconoir-nav-arrow-right align-middle"></i></li>
                            <li class="inline-block text-slate-400 dark:text-white/60 duration-500 ease-in-out hover:text-violet-600 dark:hover:text-white"><a href="">İçerikler</a></li>
                            <li class="inline-block text-slate-500 dark:text-white/60 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="iconoir-nav-arrow-right align-middle"></i></li>
                            <li class="inline-block text-violet-600 dark:text-white" aria-current="page">YouTube İçerik Listesi</li>
                        </ul>
                    </div>
                </div>
            </div><!--end container-->
        </section>
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="relative py-12">
            <div class="container relative">
                <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 gap-6">
                    <div class="lg:col-span-8 md:order-1 order-2">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                            
    <!-- youtube-course code  -->
<?php
include "$base_dir/Courses/youtube-course.php";
?>

                        </div><!--end grid-->
        
                        <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                            <div class="md:col-span-12 text-center">
                                <nav>
                                    <ul class="inline-flex items-center -space-x-px">
                                        <li>
                                            <a href="#" class="size-8 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm shadow-slate-100 dark:shadow-slate-800 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">
                                                <i class="mdi mdi-chevron-left text-[20px]"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-8 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm shadow-slate-100 dark:shadow-slate-800 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-8 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm shadow-slate-100 dark:shadow-slate-800 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="z-10 size-8 inline-flex justify-center items-center mx-1 rounded-full text-white bg-violet-600 shadow-sm shadow-slate-100 dark:shadow-slate-800">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-8 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm shadow-slate-100 dark:shadow-slate-800 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">4</a>
                                        </li>
                                        <li>
                                            <a href="#" class="size-8 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm shadow-slate-100 dark:shadow-slate-800 hover:border-violet-600 dark:hover:border-violet-600 hover:bg-violet-600 dark:hover:bg-violet-600">
                                                <i class="mdi mdi-chevron-right text-[20px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!--end grid-->
                    </div><!--end col-->

    <!-- side-course code  -->
<?php
include "$base_dir/Courses/side-course.php";
?>
                    
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative md:mt-24 mt-16">
                <div class="grid grid-cols-1">
                    
    <!-- information code  -->
<?php
include "$base_dir/Courses/information.php";
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