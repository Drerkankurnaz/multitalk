<?php
// $base_dir = __DIR__ . '/Base';
$static_url = '/assets';

// Define the content for the navlink block
ob_start();
?>

<!DOCTYPE html>
<html lang="tr" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>MultiTalk | Diyaloglarla Yabancı Dil Öğretimi (SBA-2023-2306)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Anadolu Üniversitesi SBA-2023-2306 Diyaloglarla Yabancı Dil Öğretimi Projesi: AOBM/CEFR A1-A2 düzeyinde sekiz dilde tematik diyalog içerikleri." name="description" />
        <meta content="MultiTalk, Diyaloglarla Yabancı Dil Öğretimi, SBA-2023-2306, AOBM, CEFR, A1, A2, Anadolu Üniversitesi" name="keywords" />
        <meta name="author" content="Anadolu Üniversitesi" />
        <meta name="website" content="https://www.anadolu.edu.tr" />
        <meta name="email" content="info@anadolu.edu.tr" />
        <meta name="version" content="1.0.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo $static_url; ?>/images/logo-icon-64.png" />

        <!-- Css -->
        <!-- Main Css -->
        <link href="<?php echo $static_url; ?>/libs/iconoir/css/iconoir.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $static_url; ?>/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo $static_url; ?>/css/tailwind.css" />

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        <script src="https://cdn.tailwindcss.com"></script>

    <script>
    tailwind.config = {
        darkMode: 'class', // or 'media' for system-based dark mode
        // important: true,
    }
    </script>

<!-- Main Content -->
<main>
    <?php echo $hero_content ?? '<!-- Default hero content here -->'; ?>
</main>

        <div class="fixed bottom-3 end-3 z-10">
            <a href="" class="size-8 flex bg-violet-600 text-white justify-center items-center rounded-full back-button"><i data-feather="arrow-left" class="size-4"></i></a>
        </div>
        
        <!-- Switcher -->
        <div class="fixed top-1/4 -right-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-[60px] h-8" for="chk">
                    <i class="iconoir-half-moon text-yellow-500 align-middle ps-1 text-[16px] relative z-1"></i>
                    <i class="iconoir-sun-light text-yellow-500 align-middle pe-1 text-[16px] relative z-1"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->
    
        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="<?php echo $static_url; ?>/libs/particles.js/particles.js"></script>
        <script src="<?php echo $static_url; ?>/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo $static_url; ?>/js/plugins.init.js"></script>
        <script src="<?php echo $static_url; ?>/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>
