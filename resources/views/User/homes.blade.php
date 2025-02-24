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

    <section
        class="parallax section section-text-light section-parallax section-center py-0 my-0 mb-5"
        data-plugin-parallax
        data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}"
        data-image-src="assets/img/cats/cats1.jpg">

        <div class="d-flex justify-content-center">
            <div class="scrollable-parallax-wrapper mb-4">
                <div class="container py-5 my-5">
                    <div class="row justify-content-center text-center py-5 my-5">
                        <div class="col-lg-9 py-5 my-5">
                            <h4 class="mb-4 fw-bold">Scrollable Parallax Section</h4>
                            <p class="mb-4 text-light">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur necessitatibus reiciendis temporibus aperiam rerum natus itaque?
                                Ducimus corrupti esse cupiditate ratione? Illum expedita earum iste minus illo optio fugiat eos.
                            </p>

                            <!-- Tambahkan Button -->
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary btn-lg px-5 py-2">Learn More</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <!-- Card Pertama -->
            <div class="col-lg-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="p-4 border border-primary rounded bg-light shadow-sm">
                        <div class="mb-3">
                            <img src="assets/img/demos/auto-services/icons/wheel-disk.svg" width="50" class="svg-blue">
                        </div>
                        <h3 class="text-primary fw-bold">Free Diagnosis & Brake Checks</h3>
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                        <h3 class="text-primary fw-bold">Car Mechanics You Can Trust</h3>
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                        <h3 class="text-primary fw-bold">Oil Change & Maintenance</h3>
                        <p class="text-dark">Perawatan rutin untuk menjaga performa mesin kendaraan Anda.</p>
                    </div>
                </a>
            </div>
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

        <div class="row">
            <div class="col-lg-5 p-0">
                <section class="parallax section section-background h-400px bg-size-cover m-4" style="background-image: url(assets/img/cats/cats1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-5 p-0">
                <div class="h-400px m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-left py-5">
                            <div class="p-3">
                                <h4 class="mb-3">Half Section</h4>
                                <h5>(Inside Column)</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.Aenean vulputate eleifend tellus.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <strong class="custom-highlight-text-1" data-to="10" data-append="+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
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
                                    <strong class="custom-highlight-text-1" data-to="5" data-append="M+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
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
                                    <strong class="custom-highlight-text-1" data-to="100" data-append="+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
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
                                    <strong class="custom-highlight-text-1" data-to="50" data-append="+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
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
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Auto Services</h2>
                </div>
                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                </div>
                <p class="font-weight-light text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
            </div>
        </div>
        <div class="row row-gutter-sm mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Brake Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Check Engine</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-sm-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Suspension Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/cats/cats1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Transmission Repair</h3>
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

    <div class="custom-bg-color-1">

        <div class="container gsap-content-container">
            <div class="row">
                <div class="col">
                    <div class="overflow-hidden">
                        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                            <span class="bg-tertiary text-secondary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium me-2 custom-margin-top-1">What We Do</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-lg-6 text-center p-relative z-index-1 gsap-content-images">

                            <div class="sticky-container h-100">
                                <div data-plugin-sticky data-plugin-options="{'minWidth': 0, 'containerSelector': '.sticky-container', 'padding': {'top': 0, 'bottom': 0}}">
                                    <div class="vh-100 w-100 d-flex align-items-center text-center">
                                        <img id="img1" class="img-fluid position-absolute transform3dx-n50 left-50pct" src="assets/img/demos/marketing-1/generic/generic-1.png" width="500" alt=""> <!-- assets/img/cats/cats1.jpg -->
                                        <img id="img2" class="img-fluid position-absolute transform3dx-n50 left-50pct" src="assets/img/demos/marketing-1/generic/generic-2.png" width="400" alt=""> <!-- assets/img/cats/cats1.jpg -->
                                        <img id="img3" class="img-fluid position-absolute transform3dx-n50 left-50pct" src="assets/img/demos/marketing-1/generic/generic-3.png" width="493" alt=""> <!-- assets/img/cats/cats1.jpg -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-7 col-lg-6 pb-4 gsap-content-text">

                            <div class="py-5 my-5">
                                <div class="gsap-content-marker" data-marker-content="img1">
                                    <div class="custom-heading-1 custom-pos-12">
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                            <strong>Strategy</strong>
                                        </div>
                                    </div>

                                    <div class="p-relative z-index-1">
                                        <h2 class="mb-4 pb-2 text-10 font-weight-semibold ls-0">Strategy</h2>
                                        <ul class="list-unstyled custom-list-services-1">
                                            <li>Market Research & Analysis</li>
                                            <li>Brand Strategy</li>
                                            <li>Digital Marketing Strategy</li>
                                            <li>Content Strategy</li>
                                            <li>SEO & SEM Strategy</li>
                                            <li>Customer Journey Mapping</li>
                                            <li>Go-to-Market Strategy</li>
                                            <li>Social Media Strategy</li>
                                            <li>Pricing Strategy</li>
                                            <li>Partnership & Alliances Strategy</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="gsap-content-marker pt-5" data-marker-content="img2">
                                    <div class="custom-heading-1 custom-pos-12">
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                            <strong>Marketing</strong>
                                        </div>
                                    </div>

                                    <div class="p-relative z-index-1">
                                        <h2 class="mb-4 pb-2 text-10 font-weight-semibold ls-0">Marketing</h2>
                                        <ul class="list-unstyled custom-list-services-1 mb-0">
                                            <li>Content Marketing</li>
                                            <li>Social Media Marketing</li>
                                            <li>Search Engine Optimization (SEO)</li>
                                            <li>Email Marketing</li>
                                            <li>Pay-Per-Click (PPC) Advertising</li>
                                            <li>Influencer Marketing</li>
                                            <li>Affiliate Marketing</li>
                                            <li>Brand Strategy</li>
                                            <li>Market Research and Analysis</li>
                                            <li>Public Relations and Media Outreach</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="gsap-content-marker pt-5" data-marker-content="img3">
                                    <div class="custom-heading-1 custom-pos-12">
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                            <strong>Design</strong>
                                        </div>
                                    </div>

                                    <div class="p-relative z-index-1">
                                        <h2 class="mb-4 pb-2 text-10 font-weight-semibold ls-0">Design</h2>
                                        <ul class="list-unstyled custom-list-services-1 mb-0">
                                            <li>Graphic Design</li>
                                            <li>Web Design</li>
                                            <li>Logo and Branding Design</li>
                                            <li>User Experience (UX) Design</li>
                                            <li>User Interface (UI) Design</li>
                                            <li>Print Design</li>
                                            <li>Packaging Design</li>
                                            <li>Motion Graphics and Animation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="custom-bg-color-1">
        <div class="gsap-section-scale custom-section-1">
            <div class="custom-section-1-box bg-light custom-border-radius-1 w-100 h-100 p-relative">

                <div class="p-absolute d-inline-block rotate-animation opacity-7 custom-el-1">
                    <img src="assets/img/demos/marketing-1/svg/generic-4.svg" alt="">
                </div>

                <!-- <div class="container py-5 z-index-1 p-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                <h3 class="custom-font-1 mb-0">Empowering <strong class="text-primary">brands</strong> with innovative <strong class="text-secondary">strategies</strong> to drive growth and success.</h3>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div data-scroll data-scroll-speed="-0.5" data-scroll-offset="-50%">
                    <ul class="list-unstyled mt-5 pt-5 mb-5">
                        <li class="custom-project-list-item-1">
                            <div class="row">
                                <div class="col-lg-3 text-center text-lg-start"><span class="custom-project-list-item-num-1">01</span></div>
                                <div class="col-lg-6 text-center py-4 py-lg-0">
                                    <span class="thumb-info thumb-info-floating-element-wrapper thumb-info-hide-wrapper-bg d-block overflow-visible bg-transparent z-index-hover-1" data-offset="-200">
                                        <span class="thumb-info-wrapper bg-transparent overflow-visible">
                                            <a href="demo-marketing-1-case-studies-details.html" class="text-12 font-weight-medium text-dark custom-project-list-item-title-1 transition-2ms">Okler Themes</a>
                                        </span>
                                        <span class="thumb-info-floating-element d-none">
                                            <img src="assets/img/demos/marketing-1/projects/project-1.png" alt="" class="img-fluid">
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 text-center text-lg-end"><span class="custom-project-list-item-type-1">Marketing</span></div>
                            </div>
                        </li>
                        <li class="custom-project-list-item-1">
                            <div class="row">
                                <div class="col-lg-3 text-center text-lg-start"><span class="custom-project-list-item-num-1">02</span></div>
                                <div class="col-lg-6 text-center py-4 py-lg-0">
                                    <span class="thumb-info thumb-info-floating-element-wrapper thumb-info-hide-wrapper-bg d-block overflow-visible bg-transparent z-index-hover-1" data-offset="-200">
                                        <span class="thumb-info-wrapper bg-transparent overflow-visible">
                                            <a href="demo-marketing-1-case-studies-details.html" class="text-12 font-weight-medium text-dark custom-project-list-item-title-1 transition-2ms">Porto</a>
                                        </span>
                                        <span class="thumb-info-floating-element d-none">
                                            <img src="assets/img/demos/marketing-1/projects/project-2.png" alt="" class="img-fluid">
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 text-center text-lg-end"><span class="custom-project-list-item-type-1">Design</span></div>
                            </div>
                        </li>
                        <li class="custom-project-list-item-1">
                            <div class="row">
                                <div class="col-lg-3 text-center text-lg-start"><span class="custom-project-list-item-num-1">03</span></div>
                                <div class="col-lg-6 text-center py-4 py-lg-0">
                                    <span class="thumb-info thumb-info-floating-element-wrapper thumb-info-hide-wrapper-bg d-block overflow-visible bg-transparent z-index-hover-1" data-offset="-200">
                                        <span class="thumb-info-wrapper bg-transparent overflow-visible">
                                            <a href="demo-marketing-1-case-studies-details.html" class="text-12 font-weight-medium text-dark custom-project-list-item-title-1 transition-2ms">Envato</a>
                                        </span>
                                        <span class="thumb-info-floating-element d-none">
                                            <img src="assets/img/demos/marketing-1/projects/project-3.png" alt="" class="img-fluid">
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 text-center text-lg-end"><span class="custom-project-list-item-type-1">Strategy</span></div>
                            </div>
                        </li>
                        <li class="custom-project-list-item-1">
                            <div class="row">
                                <div class="col-lg-3 text-center text-lg-start"><span class="custom-project-list-item-num-1">04</span></div>
                                <div class="col-lg-6 text-center py-4 py-lg-0">
                                    <span class="thumb-info thumb-info-floating-element-wrapper thumb-info-hide-wrapper-bg d-block overflow-visible bg-transparent z-index-hover-1" data-offset="-200">
                                        <span class="thumb-info-wrapper bg-transparent overflow-visible">
                                            <a href="demo-marketing-1-case-studies-details.html" class="text-12 font-weight-medium text-dark custom-project-list-item-title-1 transition-2ms">Theme Forest</a>
                                        </span>
                                        <span class="thumb-info-floating-element d-none">
                                            <img src="assets/img/demos/marketing-1/projects/project-4.png" alt="" class="img-fluid">
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 text-center text-lg-end"><span class="custom-project-list-item-type-1">Marketing</span></div>
                            </div>
                        </li>
                        <li class="custom-project-list-item-1 border-bottom-0">
                            <div class="row">
                                <div class="col-lg-4 text-center text-lg-start"><span class="custom-project-list-item-num-1">05</span></div>
                                <div class="col-lg-4 text-center">
                                    <span class="thumb-info thumb-info-floating-element-wrapper thumb-info-hide-wrapper-bg d-block overflow-visible bg-transparent z-index-hover-1" data-offset="-200">
                                        <span class="thumb-info-wrapper bg-transparent overflow-visible">
                                            <a href="demo-marketing-1-case-studies-details.html" class="text-12 font-weight-medium text-dark custom-project-list-item-title-1 transition-2ms">Code Canyon</a>
                                        </span>
                                        <span class="thumb-info-floating-element d-none">
                                            <img src="assets/img/demos/marketing-1/projects/project-5.jpg" alt="" class="img-fluid custom-border-radius-1">
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-3 text-center text-lg-end"><span class="custom-project-list-item-type-1">Strategy</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="parallax section section-text-light section-parallax section-center py-0 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}" data-image-src="assets/img/demos/marketing-1/generic/generic-7.jpg">
        <div class="d-flex justify-content-center">
            <div class="scrollable-parallax-wrapper py-5">
                <div class="container py-5 my-5">
                    <div class="row justify-content-center py-5 my-5">
                        <div class="col-lg-9 py-lg-5 my-lg-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section border-0 bg-dark m-0"> <!-- Changed bg-quaternary to bg-dark -->
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
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                <blockquote class="p-3 before-d-none">
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3">
                            <div class="testimonial testimonial-style-3 testimonial-style-3-light">
                                <blockquote class="p-3 before-d-none">
                                    <p class="font-weight-medium text-4 line-height-5 p-3 m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                </blockquote>
                                <div class="testimonial-arrow-down p-relative z-index-1"></div>
                                <div class="testimonial-author">
                                    <div class="testimonial-author-thumbnail">
                                        <img src="assets/img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
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