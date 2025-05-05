@extends('User.base')
@section('main_content')
<div role="main" class="main">

    <!-- <section class="parallax section section-text-light section-parallax section-center py-0 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}" data-image-src="assets/img/cats/cats1.jpg">
        <div class="d-flex justify-content-center">
            <div class="scrollable-parallax-wrapper">
                <div class="container py-5 my-5">
                    <div class="row justify-content-center py-5 my-5">
                        <div class="col-lg-9 py-5 my-5">
                            <h4 class="mb-3">Kucing</h4>
                            <p class="mb-0">Kucing pak prabowo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <div class="parallax section section-text-light section-parallax section-center vh-100 d-flex align-items-center justify-content-center py-0 my-0 mb-5"
        data-plugin-parallax
        data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'transform', 'cssValueStart': 'translateY(0px)', 'cssValueEnd': 'translateY(-200px)'}">

        <div id="parallaxCarousel" class="carousel slide w-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active vh-100" data-image-src="assets/img/logo-mct/fotbar.jpg" style="background-image: url('assets/img/logo-mct/fotbar.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
                    <div class="d-flex align-items-center justify-content-center w-100 h-100">
                        <div class="container text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h4 class="mb-4 fw-bold">KENAPA HARUS MECHATRON?</h4>
                                    <p class="mb-4 text-light">
                                        Kami menawarkan sistem pembelajaran robotik yang lebih menyeluruh dan menyentuh berbagai aspek.
                                    </p>
                                    <a href="#" class="btn btn-primary btn-lg px-5 py-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item vh-100" data-image-src="assets/img/backgrounds/1.jpg" style="background-image: url('assets/img/backgrounds/1.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
                    <div class="d-flex align-items-center justify-content-center w-100 h-100">
                        <div class="container text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h4 class="mb-4 fw-bold">FOKUS</h4>
                                    <p class="mb-4 text-light">
                                    Setiap kali Anda ingin meraih sesuatu, tetaplah buka mata, berkonsentrasi, dan pastikan Anda tahu persis apa yang Anda inginkan. Tidak seorang pun dapat mencapai targetnya dengan mata tertutup.
                                    </p>
                                    <a href="#" class="btn btn-success btn-lg px-5 py-2">Explore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#parallaxCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#parallaxCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container-fluid pt-4 mb-5"> <!-- pt-4 untuk memberi jarak antara section  -->
        <!-- <div class="row">
            <div class="col-lg-6 p-0">
                <section
                    class="parallax section section-parallax h-100 m-0"
                    data-plugin-parallax
                    data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}"
                    data-image-src="assets/img/cats/cats1.jpg"
                    style="min-height: 315px"></section>
            </div>
            <div class="col-lg-6 p-0">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left py-5">
                            <div class="p-3">
                                <h4 class="mb-3">Half Section</h4>
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim
                                    justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<<<<<<< HEAD
        <div class="row">
            <div class="col-lg-5 p-0">
                <section class="parallax section section-background h-400px bg-size-cover m-4" style="background-image: url(assets/img/cats/cats1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col">
=======

            
>>>>>>> dae62a6e42c49589eb3dc5feb48a553071ea83e6

    <div class="container text-center">
        <div class="row justify-content-center">
            <!-- Card Pertama -->
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="p-4 border border-primary rounded bg-light shadow-sm">
                        <div class="mb-3">
                            <img src="assets/img/demos/auto-services/icons/wheel-disk.svg" width="50" class="svg-blue">
                        </div>
                        <h3 class="text-primary fw-bold">Mechanic</h3>
                        <p class="text-dark">Mechanic merupakan bentuk badan dari robot dan mekanisme kerjanya, sehingga kurikulum yang kami ajarkan tentang bagaimana membuat bentuk dan proses kerjanya.</p>
                    </div>
                </a>
            </div>

            <!-- Card Kedua -->
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="p-4 border border-primary rounded bg-light shadow-sm">
                        <div class="mb-3">
                            <img src="assets/img/demos/auto-services/icons/car-safe.svg" width="50" class="svg-blue">
                        </div>
                        <h3 class="text-primary fw-bold">Electronic</h3>
                        <p class="text-dark">Electronic merupakan isi dari robot, mulai dari sensor hingga penggerak, dari baterai hingga tampilan display yang semuanya akan diatur oleh komputer.</p>
                    </div>
                </a>
            </div>

            <!-- Card Ketiga (Tambahan) -->
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="p-4 border border-primary rounded bg-light shadow-sm">
                        <div class="mb-3">
                            <img src="assets/img/demos/auto-services/icons/checklist.svg" width="50" class="svg-blue">
                        </div>
                        <h3 class="text-primary fw-bold">Computer</h3>
                        <p class="text-dark">Seluruh proses dalam robot diatur dalam computer, sehingga untuk dapat membuat robot bergerak sesuai kebutuhan akan diperlukan kemampuan pemrograman.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--  <div class="container pt-5 pt-lg-4">
        <div class="row align-items-center text-center py-5 my-3">
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                    <img src="img/logos/logo-3.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                    <img src="img/logos/logo-4.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <img src="img/logos/logo-5.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    <img src="img/logos/logo-6.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <img src="img/logos/logo-7.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-5 mb-xl-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <img src="img/logos/logo-1.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="gsap-section-scale custom-section-1">
        <div class="custom-section-1-box custom-bg-color-1 custom-border-radius-1 w-100 h-100 p-relative">
            <div class="container py-5">
                <div class="row text-center text-xl-start align-items-center">
                    <div class="col-xl-8">
                        <div class="overflow-hidden">
                            <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                                <h3 class="custom-font-1">Empowering brands with innovative strategies to drive <span class="custom-word-highlight-1 d-inline-block p-relative"><span class="p-relative z-index-2">growth</span><img width="100%" src="assets/img/demos/marketing-1/svg/generic-3.svg" alt="" /></span> and success.</h3>
                            </div>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <a href="#" class="btn btn-modern btn-effect-4 btn-rounded btn-dark text-transform-none text-3 font-weight-medium mt-2 mb-2 z-index-2 p-relative">Learn More <i class="fas fa-arrow-right rotate-l-45 ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-5 pt-xl-0">
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                            <div class="hover-effect-3d" data-plugin-hover-effect data-plugin-options="{'effect': '3d', 'selector': '.hover-effect-3d-wrapper', 'sensitivity': 20}">
                                <div class="hover-effect-3d-wrapper">
                                    <a href="#">
                                        <span class="bg-gradient text-light anim-hover-scale-1-2 transition-3ms d-inline-flex align-items-center text-3-5 rounded-pill px-4 py-1 font-weight-500 me-2 mb-4">
                                            <span><img src="assets/img/demos/marketing-1/concept/concept-10.png" alt="" class="rounded-pill img-fluid my-2 p-relative right-7 me-2"></span>
                                            <span class="rounded-circle bg-light d-inline-block"><img width="68" class="scale-1" src="assets/img/demos/marketing-1/svg/generic-2.svg" alt="" /></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
                            <p class="text-4 mb-0">Unlock your brand's potential with tailored marketing strategies that connect, engage, and drive measurable results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <div class="bg-dark pt-5">


        <div class="container py-4 py-lg-5">
            <div class="row text-center text-lg-start py-lg-5">
                <div class="col pb-4 pt-4 mt-5">
                    <div class="overflow-hidden">
                        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                            <span class="bg-quaternary text-secondary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium me-2">
                                Tahapan Level
                            </span>
                        </div>
                    </div>

                    <!-- Baris Pertama: Survival dan Waystage -->
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                    <strong class="custom-highlight-text-1" data-to="4" data-append="-7" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Survival</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">
                                    Level survival merupakan level terendah dalam kurikulum kami, dimulai usia 4 hingga 7 tahun.
                                    Penekanan level ini lebih kepada konstruksi robot, untuk melatih motorik anak.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <strong class="custom-highlight-text-1" data-to="8" data-append="-11" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Waystage</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">
                                    Level waystage dimulai usia 8 hingga 11 tahun. Pada level ini sudah mulai diajarkan pemrograman robot
                                    dengan bahasa paling mudah yaitu GUI Programming, hingga melatih kemampuan analisa dan logical thinking.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Baris Kedua: Treshold dan Milestone -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <strong class="custom-highlight-text-1" data-to="12" data-append="-14" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Treshold</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">
                                    Level Threshold dimulai usia 12 hingga 14 tahun. Pada level ini kami memperkenalkan penggunaan alat-alat
                                    untuk membuat rangkaian elektronika, selain materi dasar tingkat waystage yang sudah harus dikuasai.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                    <strong class="custom-highlight-text-1" data-to="15" data-append="-18" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Milestone</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">
                                    Level milestone dimulai usia 15 hingga 18 tahun. Level ini merupakan level tertinggi kami untuk kelas reguler.
                                    Pada level ini kami memberikan materi pemrograman C language dasar dan pembuatan rangkaian elektronika.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8 text-center">
                <div class="overflow-hidden">   
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Services</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                </div>
                <p class="font-weight-light text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Kami hadir untuk membantu Anda di setiap tahap—dari ide awal, pelaksanaan program, hingga dukungan teknologi.</p>
            </div>
        </div>
        <div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
            <div class="col-sm-6 col-lg-4 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Stage Level</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Activities & Programs</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 text-center mb-4 mb-sm-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Hardware & Programming</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="/service" class="btn btn-primary text-color-light custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850">VIEW ALL SERVICES</a>
            </div>
        </div>
    </div>


    <section class="section border-0 bg-dark m-0 mt-4">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col col-lg-9 text-center">
                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                    <div class="overflow-hidden mb-1">
                        <h3 class="font-weight-semi-bold text-light text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">What They Say About Us</h3>
                    </div>
                    <h2 class="text-light font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Testimonials</h2>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                    <div class="owl-carousel owl-theme stage-margin rounded-nav nav-dark nav-icon-1 nav-size-md mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 2}}, 'margin': 0, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                        <div class="mx-3">
                            <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                <blockquote class="p-3 before-d-none">
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">“Belajar di Mechatron itu asik banget! Aku bisa bikin robot jalan sendiri, terus belajar coding juga jadi gampang. Gurunya baik dan sabar ngajarin. Pokoknya gak nyesel daftar di sini!”</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">Celine</strong><span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                <blockquote class="p-3 before-d-none">
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">“Awalnya aku cuma penasaran, tapi sekarang malah pengen jadi engineer beneran! Di Mechatron aku belajar rakit robot dari nol, terus ikut lomba juga. Seru banget!”</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">Kenzo</strong><span></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                <blockquote class="p-3 before-d-none">
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">“Dulu aku pikir teknologi itu susah, tapi di Mechatron semuanya dijelasin dengan cara yang seru. Belajar sambil praktek bikin aku cepat ngerti dan makin suka robotik.”</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">Vanya</strong><span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>



    <!-- <div class="custom-pos-13">
            <div class="marquee py-3 custom-bg-gradient-1" data-duration="70000" data-gap="10" data-duplicated="true" data-startVisible="true">
                <p class="text-5-5 text-dark font-weight-medium m-0 d-block py-3 ws-nowrap custom-font-secondary"><span data-clone-element="5">Planning • Positioning • Market Research • Optimization • Analysis • Strategy • </span></p>
            </div>
        </div>
    </div>
</div> --> <!-- Kayak Tron -->
    @endsection
