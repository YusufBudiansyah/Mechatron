<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mechatron</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-marketing-1.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-auto-services.css')}}"> <!-- untuk css service dari template auto service -->
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-business-consulting-4.css')}}"> <!-- css testimoni -->

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/default.css')}}"> <!-- Untuk Ajax Modal -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/skin-marketing-1.css')}}">
    <!-- <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/skin-auto-services.css')}}"> --> <!-- untuk css service dari template auto service -->

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

</head>

<body data-plugin-cursor-effect>
    <div class="body">

        <header id="header" class="header-transparent" data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 100}">
            <div class="header-body border-0 box-shadow-none h-auto">
                <div class="header-container container-fluid p-static">
                    <div class="header-row py-3 px-xl-5">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/landing">
                                        <img alt="Porto" width="130" height="32" src="assets/img/demos/marketing-1/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-border-radius header-nav-main-text-capitalize header-nav-main-text-size-4 header-nav-main-arrows header-nav-main-full-width-mega-menu header-nav-main-mega-menu-bg-hover header-nav-main-effect-2">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link active" href="/landing">
                                                        Home
                                                    </a>
                                                </li>

                                                <!--About submenu navbar-->
                                                <li class="dropdown dropdown-full-color dropdown-dark">
                                                    <a href="#" class="dropdown-item dropdown-toggle text-hover-primary">About</a>
                                                    <ul class="dropdown-menu">
                                                        <li> <a href="/about1" class="nav-link">Who We Are</a> </li>
                                                        <!-- <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Stage Level</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="/survival">Survival Level</a></li>
                                                                <li><a class="dropdown-item" href="#">Waystage Level</a></li>
                                                                <li><a class="dropdown-item" href="#">Treshold Level</a></li>
                                                                <li><a class="dropdown-item" href="#">Milestone Level</a></li>
                                                            </ul>
                                                        </li> -->
                                                        <li> <a href="/team" class="nav-link">Our Team</a> </li>
                                                    </ul>
                                                </li>

                                                <!--Services submenu navbar-->




                                                <!-- Product Navbar Page -->
                                                <li class="dropdown dropdown-full-color dropdown-dark">
                                                    <a href="/product" class="dropdown-item dropdown-toggle text-hover-primary">Product</a>
                                                    <ul class="dropdown-menu">
                                                        <!-- <h7>LEGO</h7> --> <!-- Untuk Judul navbar dropdown-->
                                                        <li> <a href="/nxtmind" class="nav-link">NXT Mindstorm</a></li>
                                                        <li> <a href="/techmachine" class="nav-link">Tech Machine Set</a> </li>
                                                        <li> <a href="/brick" class="nav-link">Brick</a> </li>
                                                        <li> <a href="/wedo" class="nav-link">Wedo</a> </li>

                                                        <!-- <li>
                                                            <hr class="dropdown-divider">
                                                        </li> -->

                                                        <!-- dibaris ini tambagit hin judul foto -->
                                                        <li><a class="dropdown-item" href="/linefollower">Line Follower robot</a></li>
                                                    </ul>
                                                </li>

                                                <!-- Galeri Navbar Page -->
                                                <li class="dropdown dropdown-full-color dropdown-dark">
                                                    <a href="/galery">Galery</a>

                                                </li>

                                                <!-- partnership Navbar Page -->
                                                <li class="dropdown dropdown-full-color dropdown-dark">
                                                    <a href="/partnership" class="dropdown-item dropdown-toggle text-hover-primary">Partnership</a>
                                                    <ul class="dropdown-menu">
                                                        <li> <a href="/workshop" class="nav-link">Workshop</a></li>
                                                        <li> <a href="/event" class="nav-link">Event</a> </li>
                                                    </ul>
                                                </li>

                                                <!-- Halaman  contact -->
                                                <li>
                                                    <a class="nav-link nav-link-custom-1" href="/contact">
                                                        <span>Contact Us</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('main_content')

        <footer id="footer">
            <div class="container">
                <div class="row py-5 my-4">
                    <div class="col-md-9 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3">ABOUT US</h5>
                        <p class="mt-2 mb-2">Mechatron adalah suatu lembaga yang bergerak di bidang otomasi yang saat ini sedang mengembangkan pengajaran tentang mekatronika.
                            Metode pengajaran diarahkan khususnya kepada para pelajar sekolah, mulai dari Preschool hingga High School.</p>
                        <p><a href="/about1" class="btn-flat btn-xs text-color-light"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p>
                        <div class="row pt-3">
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="text-3 mb-3">BLOG</h5>
                                <ul class="list list-icons list-icons-sm mb-0">
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-full-width.html">Blog Full Width</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-large-image.html">Blog Large Image</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-medium-image.html">Blog Medium Image</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="blog-post.html">Single Post</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="text-3 mb-3">PAGES</h5>
                                <ul class="list list-icons list-icons-sm mb-0">
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-full-width.html">Full width</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-left-sidebar.html">Left sidebar</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-right-sidebar.html">Right sidebar</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-services.html">Services</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="text-3 mb-3">PORTFOLIO</h5>
                                <ul class="list list-icons list-icons-sm mb-0">
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-2-columns.html">2 Columns</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-3-columns.html">3 Columns</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-4-columns.html">4 Columns</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="portfolio-single-wide-slider.html">Single Project</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                                <h5 class="text-3 mb-3">EXTRA</h5>
                                <ul class="list list-icons list-icons-sm mb-0">
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-team.html">Team</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-services.html">Services</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-careers.html">Careers</a></li>
                                    <li><i class="fas fa-angle-right top-8"></i> <a class="link-hover-style-1" href="page-faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3 pb-1">CONTACT US</h5>
                        <p class="text-8 text-color-light font-weight-bold"><a href="tel:0123456789" class="text-decoration-none text-color-light">(800) 123-4567</a></p>
                        <p class="mb-2">International: <a href="tel:0123456789" class="text-decoration-none">(333) 456-6670</a></p>
                        <p class="mb-2">Fax: (222) 531-8999</p>
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
                                <p class="m-0">234 Street Name, City Name</p>
                            </li>
                            <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                                <p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
                            </li>
                        </ul>
                        <ul class="footer-social-icons social-icons mt-4">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                            <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter text-2"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                            <a href="index.html" class="logo pe-0 pe-lg-3">
                                <img alt="Porto Website Template" src="assets/img/logo-footer.png" class="opacity-5" height="32">
                            </a>
                        </div>
                        <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>© Mechatron 2024. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                            <nav id="sub-menu">
                                <ul>
                                    <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
                                    <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--  <a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="assets/master/less/skin-marketing-1.less" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher" aria-label="Style Switcher"><i class="fas fa-cogs"></i>
            <div class="style-switcher-tooltip"><strong>Style Switcher</strong>
                <p>Check out different color options and styles.</p>
            </div>
        </a> -->

        <!-- Vendor -->
        <script src="assets/vendor/plugins/js/plugins.min.js"></script>
        <script src="assets/vendor/gsap/gsap.min.js"></script>
        <script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
        <script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script> <!-- untuk testimonial -->
        <script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script> <!-- untuk testimonial -->

        <!-- Theme Base, Components and Settings -->
        <script src="assets/js/theme.js"></script>

        <!-- Demo -->
        <script src="assets/js/demos/demo-marketing-1.js"></script>
        <script src="js/demos/demo-auto-services.js"></script> <!-- js dari auto services -->


        <!-- Current Page Vendor and Views -->
        <script src="assets/js/views/view.contact.js"></script>

        <!-- Theme Custom -->
        <script src="assets/js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="assets/js/theme.init.js"></script>

        <!-- Examples -->
        <script src="assets/js/examples/examples.animations.js"></script>
        <script src="js/examples/examples.portfolio.js"></script>

        <!-- Selector Team -->
        <!-- <script src="{{ asset('js/team-selector.js') }}"></script>  -->

        <!-- Bootstrap 5 JS + Popper --> <!-- untuk pop up modal -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Script untuk menampilkan popup otomatis saat halaman dimuat
            document.addEventListener("DOMContentLoaded", function() {
                var myModal = new bootstrap.Modal(document.getElementById("eventPopup"), {
                    backdrop: "static", // Untuk mencegah penutupan saat klik di luar popup
                });
                myModal.show();
            });
        </script>



</body>

</html>
