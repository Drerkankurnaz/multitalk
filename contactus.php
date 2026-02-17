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

$contacts = [
    [
        'icon' => 'iconoir-phone text-3xl', 
        'name' => 'Telefon',
        'title' => 'Proje birimi ile doğrudan iletişim kurmak için telefon hattımızı kullanabilirsiniz.',
        'info' => '+90 (222) 335 05 80',
        'link' => 'tel:+902223350580'
    ],
    [
        'icon' => 'iconoir-mail text-3xl', 
        'name' => 'E-posta',
        'title' => 'İçerik, kullanım ve kurumsal iş birliği konularında bize e-posta gönderebilirsiniz.',
        'info' => 'info@anadolu.edu.tr',
        'link' => 'mailto:info@anadolu.edu.tr'
    ],
    [
        'icon' => 'iconoir-map-pin text-3xl', 
        'name' => 'Konum',
        'title' => 'Anadolu Üniversitesi, <br> Eskişehir, Türkiye',
        'info' => 'Haritada Gör',
        'link' => 'https://www.google.com/maps?q=Anadolu+University+Eskisehir'
    ]
];
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

        <!-- Google Map -->
        <div class="container-fluid relative mt-20">
            <div class="grid grid-cols-1">
                <div class="w-full leading-[0] border-0">
                    <iframe src="https://www.google.com/maps?q=Anadolu+University+Eskisehir&output=embed" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
        <!-- Google Map -->

        <!-- Start Section-->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-7 md:col-span-6">
                        <img src="<?php echo $static_url; ?>/images/contact.svg" alt="">
                    </div>

                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:me-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">İletişime Geçin</h3>

                                <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                    <p class="mb-0" id="error-msg"></p>
                                    <div id="simple-msg"></div>
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="name" class="font-medium">Ad Soyad:</label>
                                            <input name="name" id="name" type="text" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 mt-2" placeholder="Ad Soyad">
                                        </div>
        
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="email" class="font-medium">E-posta:</label>
                                            <input name="email" id="email" type="email" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 mt-2" placeholder="ornek@eposta.com">
                                        </div>
                                    </div>
    
                                    <div class="grid grid-cols-1">
                                        <div class="mb-5">
                                            <label for="subject" class="font-medium">Konu:</label>
                                            <input name="subject" id="subject" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-10 mt-2" placeholder="Mesaj konusu">
                                        </div>
    
                                        <div class="mb-5">
                                            <label for="comments" class="font-medium">Mesaj:</label>
                                            <textarea name="comments" id="comments" class="w-full py-2 px-3 border border-slate-100 dark:border-slate-800 focus:border-violet-600/30 dark:focus:border-violet-600/30 bg-transparent focus:outline-none rounded-md h-28 mt-2 textarea" placeholder="Mesajınızı yazın"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" name="send" class="h-10 px-5 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-violet-600 text-white">Mesaj Gönder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
            
            <div class="container relative lg:mt-24 mt-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">

                <?php foreach ($contacts as $item): ?>
                    <div class="text-center px-6">
                        <div class="size-16 bg-violet-600/5 text-violet-600 rounded-2xl flex align-middle justify-center items-center shadow-sm mx-auto">
                            <i class="<?php echo $item['icon']; ?>"></i>
                        </div>

                        <div class="content mt-4">
                            <h5 class="text-lg font-semibold"><?php echo $item['name']; ?></h5>
                            <p class="text-slate-400 mt-3"><?php echo $item['title']; ?></p>
                            
                            <div class="mt-4">
                                <a href="<?php echo $item['link']; ?>" class="btn btn-link text-violet-600 hover:text-violet-600 after:bg-violet-600 transition duration-500"><?php echo $item['info']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section-->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/base.php";
?>
