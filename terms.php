<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Edupath/assets'; // Ensure this is the correct path

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
                        <input type="text" class="w-full py-2 px-3 bg-transparent focus:outline-none rounded-md pe-6 h-10" name="s" id="searchItem" placeholder="Search...">
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
                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white">Kullanım Koşulları ve Hizmetler</h3>
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

        <!-- Start Kullanım Koşulları & Conditions -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="md:flex justify-center">
                    <div class="md:w-3/4">
                        <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <h5 class="text-xl font-medium mb-4">Introduction :</h5>
                            <p class="text-slate-400">Bu sayfada paylasilan metinler, proje kapsamında kullanilan icerik ilkeleri ve uygulama esaslarina gore duzenlenmistir.</p>

                            <h5 class="text-xl font-medium mb-4 mt-6">User Agreements :</h5>
                            <p class="text-slate-400">Proje metinleri, öğrenicilerin gerçek yaşam bağlamlarında iletişime geçebilmesini desteklemek amacıyla sade ve uygulanabilir biçimde hazırlanmıştır.</p>
                            <p class="text-slate-400 mt-3">Uygulama surecinde kullanilan tum metinler, SBA-2023-2306 sonuc raporunun amac ve kapsamiyla uyumludur.</p>
                            <p class="text-slate-400 mt-3">İçerik dili, A1-A2 düzeyindeki temel kullanicilarin anlasilir iletişim kurmasini destekleyecek sekilde tasarlanmistir.</p>
                            
                            <h5 class="text-xl font-medium mb-4 mt-6">Restrictions :</h5>
                            <p class="text-slate-400">You are specifically restricted from all of the following :</p>
                            <ul class="list-none text-slate-400 mt-3">
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Create your own skin to match your brand</li>
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Our Talented & Experienced Marketing Agency</li>
                                <li class="flex mt-2"><i class="mdi mdi-arrow-right text-violet-600 align-middle me-2"></i>Create your own skin to match your brand</li>
                            </ul>

                            <h5 class="text-xl font-medium mt-6">Users Question & Answer :</h5>

                            <div id="accordion-collapse" data-accordion="collapse" class="mt-6">
                                <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                    <h2 class="text-base font-medium" id="accordion-collapse-heading-1">
                                        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                            <span>How does it work ?</span>
                                            <svg data-accordion-icon class="size-5 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                        <div class="p-5">
                                            <p class="text-slate-400 dark:text-gray-400">Bu bolumde yer alan aciklamalar proje kapsami, yontem ve uygulama surecleri dogrultusunda guncellenmistir.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                    <h2 class="text-base font-medium" id="accordion-collapse-heading-2">
                                        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                            <span>Do I need a designer to use Edupath ?</span>
                                            <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                        <div class="p-5">
                                            <p class="text-slate-400 dark:text-gray-400">Bu bolumde yer alan aciklamalar proje kapsami, yontem ve uygulama surecleri dogrultusunda guncellenmistir.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                    <h2 class="text-base font-medium" id="accordion-collapse-heading-3">
                                        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                            <span>What do I need to do to start selling ?</span>
                                            <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                        <div class="p-5">
                                            <p class="text-slate-400 dark:text-gray-400">Bu bolumde yer alan aciklamalar proje kapsami, yontem ve uygulama surecleri dogrultusunda guncellenmistir.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                                    <h2 class="text-base font-medium" id="accordion-collapse-heading-4">
                                        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-start" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                            <span>What happens when I receive an order ?</span>
                                            <svg data-accordion-icon class="size-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                                        <div class="p-5">
                                            <p class="text-slate-400 dark:text-gray-400">Bu bolumde yer alan aciklamalar proje kapsami, yontem ve uygulama surecleri dogrultusunda guncellenmistir.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6">
                                <a href="" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">Accept</a>
                                <a href="" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white ms-2">Decline</a>
                            </div>
                        </div>
                    </div><!--end -->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Kullanım Koşulları & Conditions -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>