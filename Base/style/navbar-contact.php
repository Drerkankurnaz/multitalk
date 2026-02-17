<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="index.php">
                    <span class="inline-block text-2xl font-bold tracking-tight text-slate-900 dark:text-white">MultiTalk</span>
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline-block relative me-1">
                        <button class="text-[20px]" onclick="navbarSearch.showModal()" type="button">
                            <i class="iconoir-search align-middle"></i>
                        </button>                
                    </li>

                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-violet-600 border border-violet-600 text-white" type="button">
                            <i data-feather="shopping-cart" class="size-4"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                                <li class="px-3">Your shopping cart is empty.</li>
                            </ul>
                        </div>
                    </li>
    
                    <li class="dropdown inline-block relative">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                            <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-violet-600 border border-violet-600 text-white"><img src="<?php echo $static_url; ?>/images/team/1.jpg" class="rounded-full size-[30px]" alt=""></span>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                            <ul class="py-2 text-start">
                                <li>
                                    <a href="" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-violet-600 dark:hover:text-white"><i data-feather="user" class="size-4 me-2"></i>Profile</a>
                                </li>
                                <li>
                                    <a href="" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-violet-600 dark:hover:text-white"><i data-feather="settings" class="size-4 me-2"></i>Settings</a>
                                </li>
                                <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                                <li>
                                    <a href="" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-violet-600 dark:hover:text-white"><i data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                                </li>
                                <li>
                                    <a href="" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-violet-600 dark:hover:text-white"><i data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </li><!--end dropdown-->
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu justify-start">
                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>

                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index.php" class="sub-menu-item">
                                                <div class="min-[992px]:text-center">
                                                    <span class="hidden min-[992px]:block"><img src="<?php echo $static_url; ?>/images/demos/1.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="min-[992px]:mt-2 block">Hero One</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-two.php" class="sub-menu-item">
                                                <div class="min-[992px]:text-center">
                                                    <span class="hidden min-[992px]:block"><img src="<?php echo $static_url; ?>/images/demos/2.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="min-[992px]:mt-2 block">Hero Two</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-three.php" class="sub-menu-item">
                                                <div class="min-[992px]:text-center">
                                                    <span class="hidden min-[992px]:block"><img src="<?php echo $static_url; ?>/images/demos/3.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="min-[992px]:mt-2 block">Hero Three</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-four.php" class="sub-menu-item">
                                                <div class="min-[992px]:text-center">
                                                    <span class="hidden min-[992px]:block"><img src="<?php echo $static_url; ?>/images/demos/4.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="min-[992px]:mt-2 block">Hero Four</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                
                                <li>
                                    <ul>
                                        <li>
                                            <a href="index-five.php" class="sub-menu-item">
                                                <div class="min-[992px]:text-center">
                                                    <span class="hidden min-[992px]:block"><img src="<?php echo $static_url; ?>/images/demos/5.png" class="img-fluid rounded shadow-md" alt=""></span>
                                                    <span class="min-[992px]:mt-2 block">Hero Five</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">İçerikler</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Izgara İçerikler </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="grid.php" class="sub-menu-item">Grid Listing</a></li>
                                        <li><a href="grid-sidebar.php" class="sub-menu-item">Grid Sidebar </a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Liste İçerikler </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="list.php" class="sub-menu-item">List Listing</a></li>
                                        <li><a href="list-sidebar.php" class="sub-menu-item">List Sidebar </a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Video İçerikler </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="youtube-listing.php" class="sub-menu-item">Youtube Listing</a></li>
                                        <li><a href="video-listing.php" class="sub-menu-item">Video Listing</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> İçerik Detayi</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="course-detail.php" class="sub-menu-item">İçerik Detayi</a></li>
                                        <li><a href="course-detail-two.php" class="sub-menu-item">İçerik Detayi Iki</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li><a href="aboutus.php" class="sub-menu-item">Proje Hakkında</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="features.php" class="sub-menu-item">Features</a></li>
                                <li><a href="pricing.php" class="sub-menu-item">Pricing</a></li>
                                <li><a href="instructors.php" class="sub-menu-item">Eğitmenler</a></li>
                                <li><a href="faqs.php" class="sub-menu-item">Faqs</a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="login.php" class="sub-menu-item">Login</a></li>
                                        <li><a href="signup.php" class="sub-menu-item">Signup</a></li>
                                        <li><a href="forgot-password.php" class="sub-menu-item">Reset Password</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.php" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-sidebar.php" class="sub-menu-item"> Blog Sidebar</a></li>
                                        <li><a href="blog-detail.php" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.php" class="sub-menu-item">Comingsoon</a></li>
                                        <li><a href="maintenance.php" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="404.php" class="sub-menu-item">404! Error</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="contactus.php" class="sub-menu-item">İletişim</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

<!-- JavaScript to handle the active class -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navItems = document.querySelectorAll('#navbar-navlist .nav-link');

        navItems.forEach(item => {
            item.addEventListener('click', function () {
                // Remove active class from all nav-links
                navItems.forEach(nav => nav.classList.remove('active'));
                
                // Add active class to the clicked nav-link
                this.classList.add('active');
            });
        });
    });
</script>