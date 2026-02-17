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
        <section class="relative table w-full py-32 lg:py-44 bg-[url('../../<?php echo $static_url; ?>/images/bg/3.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold text-white">Proje Hakkında</h3>
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
                        <h4 class="mb-4 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Diyaloglarla Yabancı Dil Öğretimi</h4>
                        <p class="text-slate-400 max-w-xl mx-auto">SBA-2023-2306 numaralı proje, Anadolu Üniversitesi Bilimsel Araştırma Projeleri Koordinasyon Birimi tarafından desteklenmiştir. Çalışma, AOBM/CEFR çerçevesinde A1-A2 düzeyindeki temel dil kullanıcılarına yönelik olarak tasarlanmıştır.</p>
                        <p class="text-slate-400 max-w-xl mx-auto mt-3">Proje kapsamında Türkçe, İngilizce, Almanca, Fransızca, İtalyanca, İspanyolca, Rusça ve Arapça dillerinde günlük yaşam odaklı tematik diyaloglar hazırlanmıştır. Bu diyaloglar, iletişimsel yetkinlik ve kültürlerarası iletişim becerilerini desteklemek amacıyla geliştirilmiştir.</p>

                        <div class="grid md:grid-cols-2 mt-4">
                            <ul class="list-none">
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">A1-A2 düzeyinde içerik</span></li>
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">8 dilde tematik diyalog</span></li>
                            </ul>

                            <ul class="list-none">
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">Kültürlerarası yaklaşım</span></li>
                                <li class="mt-2 text-[16px]"><i class="mdi mdi-circle-medium"></i> <span class="text-slate-400">Video destekli öğrenme</span></li>
                            </ul>
                        </div>

                        <div class="mt-6">
                            <a href="language-selection.php" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600/10 hover:bg-violet-600 text-violet-600 hover:text-white">Öğrenmeye Başla <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Projenin Temel Katkıları</h4>
                    <p class="text-slate-400 max-w-xl mx-auto">Dil öğrenimini diyalojik-iletişimsel bağlamda destekleyen, kültürel unsurları içeren ve günlük yaşam senaryolarına dayalı sürdürülebilir bir dijital model sunulmuştur.</p>
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
                    <h4 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Tematik Senaryolar</h4>
                    <p class="text-slate-400 max-w-xl mx-auto">Süpermarkette, Restoranda, Otelde, Hastanede, Eczanede, Bankada, Şehirde ve Düğünde gibi gündelik iletişim bağlamları esas alınmıştır.</p>
                </div><!--end grid-->

            </div><!--end container-->

            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Dijital İçerik ve Yaygın Etki</h3>
                    <p class="text-slate-400 max-w-xl mx-auto">Proje çıktıları animasyonlu ve altyazılı video formatına dönüştürülmüş, çevrimiçi erişime açılarak yabancı dil öğrenenlerin motivasyonunu ve iletişim becerilerini artırmayı hedeflemiştir.</p>
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
