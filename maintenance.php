<?php
$base_dir = __DIR__ . '/Base';
$static_url = '/Edupath/assets'; // Ensure this is the correct path

// Define the content for the navlink block
ob_start();
?>
<?php
$navlink_content = ob_get_clean(); // Capture the navlink content
// $page= 'login';
// Optionally define the Hero block content
ob_start();
?>

        <section class="md:h-screen py-36 flex items-center relative bg-[url('../../<?php echo $static_url; ?>/images/bg/2.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container relative z-3 text-center">
                <div class="grid grid-cols-1">
                    <img src="<?php echo $static_url; ?>/images/logo-icon-64.png" class="mx-auto" alt="">
                    <h1 class="text-white mb-6 mt-8 md:text-5xl text-3xl font-bold">We Are Back Soon...</h1>
                    <p class="text-white/70 text-lg max-w-xl mx-auto">SBA-2023-2306 projesi kapsamında, AOBM/CEFR A1-A2 düzeyinde tematik diyaloglarla iletişim becerileri geliştirilir.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-10">
                    <div class="text-center">
                        <span id="maintenance" class="timer text-white text-[56px] tracking-[1px]"></span>
                        <span class="block text-base font-semibold uppercase text-white">Minutes</span>
                    </div>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-6">
                    <div class="text-center">
                        <form class="relative mx-auto max-w-xl">
                            <input type="email" id="subemail" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-slate-100 dark:border-slate-800" placeholder="E-posta adresiniz">
                            <button type="submit" class="h-12 px-6 tracking-wide items-center justify-center font-medium bg-violet-600 text-white rounded-full absolute top-[1px] end-[1px]">Abone Ol</button>
                        </form><!--end form-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section -->

<?php
$hero_content = ob_get_clean(); // Capture the hero content

// Include the base template
include "$base_dir/style/no-header.php";
?>