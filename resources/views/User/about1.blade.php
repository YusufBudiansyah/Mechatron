@extends('User.base')
@section('main_content')
<div role="main" class="main">

    <section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
        <div class="container">
            <div class="row py-lg-5 text-center text-lg-start">
                <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                    <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                        <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Who We Are</mark></h1>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                        <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                        <li class="active text-color-primary text-transform-none">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row py-5 text-center text-xl-start align-items-center">
            <div class="col-xl-8">
                <div class="overflow-hidden">
                    <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                        <h1>Membantu pertumbuhan dan perkembangan anak dengan media teknologi dan mengedepankan inovasi dalam prosesnya</h1>
                    </div>
                </div>
            </div>

            <section class="parallax section section-text-light section-parallax section-center py-0 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 10, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}" data-image-src="assets/img/cats/cats1.jpg">
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
        </div>
    </div>

    <!-- <div class="bg-gradient py-4">
        <div class="container py-5">
            <div class="row py-5 text-center text-xl-start align-items-center">
                <div class="col-lg-4">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <h3 class="custom-font-1 text-light">Empowering Brands!</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <span class="bg-light text-primary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium me-2 mb-3">About Helping Businesses</span>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <p class="text-light opacity-7 text-4-5 line-height-10">We are passionate about helping businesses grow through strategic, innovative, and data-driven marketing solutions. Founded on the principles of creativity, integrity, and customer-centricity, our team of seasoned marketers is dedicated to delivering measurable results that drive success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark">

        <div class="container py-4 py-lg-5">
            <div class="row text-center text-lg-start py-lg-5">
                <div class="col pb-4 pt-4 mt-5">
                    <div class="overflow-hidden">
                        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                            <span class="bg-quaternary text-secondary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium me-2">Impact Numbers</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                    <strong class="custom-highlight-text-1" data-to="10" data-append="+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Years of Growth</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Over a decade of driving consistent growth, delivering impactful results, and empowering brands to achieve their fullest potential</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <strong class="custom-highlight-text-1" data-to="5" data-append="M+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Revenue Generated</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Millions in revenue generated through strategic campaigns, helping our clients achieve remarkable financial success and sustainable growth.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <strong class="custom-highlight-text-1" data-to="100" data-append="+" data-plugin-counter data-plugin-options="{'speed': 2000}">0</strong>
                                </div>
                            </div>
                            <div class="p-relative z-index-1">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Business Served</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Partnered with hundreds of businesses across diverse industries, delivering tailored marketing solutions that drive results and foster long-term success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container gsap-content-container">
        <div class="row">
            <div class="col pt-4">

                <div class="row">
                    <div class="col-5 col-lg-7 text-center p-relative z-index-1 gsap-content-images">

                        <div class="sticky-container h-100">
                            <div data-plugin-sticky data-plugin-options="{'minWidth': 0, 'containerSelector': '.sticky-container', 'padding': {'top': 0, 'bottom': 0}}">
                                <div class="vh-100 w-100 d-flex align-items-center text-center">
                                    <img id="img1" class="img-fluid position-absolute custom-border-radius-1 transform3dx-n50 left-50pct" src="assets/img/demos/marketing-1/generic/generic-5.jpg" width="500" alt="">
                                    <img id="img2" class="img-fluid position-absolute custom-border-radius-1 transform3dx-n50 left-50pct" src="assets/img/demos/marketing-1/generic/generic-6.jpg" width="500" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-7 col-lg-5 pb-4 gsap-content-text">
                        <div class="py-5 my-5">
                            <div class="gsap-content-marker" data-marker-content="img1">
                                <div class="custom-heading-1 custom-pos-12">
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                        <strong>Culture</strong>
                                    </div>
                                </div>

                                <div class="p-relative z-index-1">
                                    <h2 class="mb-4 pb-2 text-10 font-weight-semibold ls-0">Why Should Mechatron ?</h2>

                                    <h3 class="mb-2 pb-2 text-5 font-weight-semibold ls-0">Kami menawarkan sistem pembelajaran robotik yang lebih menyeluruh dan menyentuh berbagai aspek</h3>

                                    <p class="text-4-5 text-dark"> <strong>Math and science :</strong> Matematika dan ilmu pengetahuan merupakan pondasi sebuah teknologi</p>

                                    <p class="text-4-5 text-dark"> <strong>Logic :</strong> Mengapa belajar Logika? Mungkin hal penting untuk diberikan kepada anak Anda untuk mempersiapkan dirinya menghadapi dunia ini adalah kemampuan berpikir logis</p>

                                    <p class="text-4-5 text-dark"> <strong>Analysis :</strong>Analisis adalah salah satu bagian awal proses desain, sehingga anak terbiasa untuk melakukan analisa sebelum membuat sesuatu.</p>

                                    <p class="text-4-5 text-dark"> <strong>Problem Solving :</strong> Mencari permasalahan dan memecahkannya akan sering dialami seseorang, sehingga melatih sejak dini akan sangat baik untuk masa depannya</p>

                                    <p class="text-4-5 text-dark"> <strong>Creativity :</strong> Kami merangsang anak untuk dapat mengubah ide dan imajinasi mereka menjadi sebuah kenyataan.</p>

                                    <p class="text-4-5 text-dark"> <strong>Communication :</strong> Pembelajaran yang kami kembangkan merupakan sistem 2 arah, yang berarti siswa ikut berperan aktif dalam kegiatan belajar mengajar, yang berpengaruh terhadap perkembangan kemampuan verbalnya</p>

                                    <p class="text-4-5 text-dark"><strong>Team Work : </strong> TEAM adalah together everyone achieve more, yang dibutuhkan anak untuk membuat suatu project.</p>

                                    <p class="text-4-5 text-dark"><strong>Character Building:</strong>knowledge is power, but character is more. Kami berharap dengan menanamkan nilai-nilai baik dalam proses pembelajaran akan ikut turut serta membentuk karakter yang diharapkan orangtua dan lingkungannya.</p>

                                </div>
                            </div>

                            <div class="gsap-content-marker pt-5" data-marker-content="img2">
                                <div class="custom-heading-1 custom-pos-12">
                                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                        <strong>Values</strong>
                                    </div>
                                </div>

                                <div class="p-relative z-index-1">
                                    <h2 class="mb-4 pb-2 text-10 font-weight-semibold ls-0">Client List</h2>

                                    <p class="text-4-5 text-dark">SDIT Ummul Quro'</p>
                                    <p class="text-4-5 text-dark">Mts Pembangunan</p>
                                    <p class="text-4-5 text-dark">SDIT AL Qolam</p>
                                    <p class="text-4-5 text-dark">SDIT AL Hikmah</p>
                                    <p class="text-4-5 text-dark">SDI Sinar Cendekia</p>
                                    <p class="text-4-5 text-dark">SMPI Sinar Cendekia</p>
                                    <p class="text-4-5 text-dark">SDI Arrahman Islamic School</p>
                                    <p class="text-4-5 text-dark">SDI Binakheir</p>
                                    <p class="text-4-5 text-dark">Sekolah Citra Alam</p>
                                    <p class="text-4-5 text-dark">SD Integral Hidayatullah</p>
                                    <p class="text-4-5 text-dark">SDI Al Qudwah</p>
                                    <p class="text-4-5 text-dark">SDMIT Nururrahman</p>
                                    <p class="text-4-5 text-dark">SMPIT AL Haraqi</p>
                                    <p class="text-4-5 text-dark">SDIT AL Haraqi</p>
                                    <p class="text-4-5 text-dark">SMP Al Azhar Syifa Budi</p>
                                    <p class="text-4-5 text-dark">SDI Al Azhar Syifa Budi</p>
                                    <p class="text-4-5 text-dark">SDIT Darojatul 'ulum</p>
                                    <p class="text-4-5 text-dark">SDIT Misbahushudur</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  <section class="section border-top-0 custom-bg-color-1 m-0">
            <div class="custom-el-2">
                <div class="container pt-4 pb-5 p-relative z-index-1">
                    <div class="row text-center text-lg-start justify-content-between py-5">
                        <div class="col-lg-4 py-5 px-4 px-lg-0">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                <span class="bg-gradient text-light d-inline-block text-3 rounded-pill px-4 py-1 font-weight-medium me-2"><i class="fa-solid fa-star me-1"></i><i class="fa-solid fa-star me-1"></i><i class="fa-solid fa-star me-1"></i><i class="fa-solid fa-star me-1"></i><i class="fa-solid fa-star"></i></span>
                                <p class="p-0 d-inline-block text-3-5">Beyond Expectations</p>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                <h3 class="custom-font-2 mb-0">See what our clients are <span class="custom-word-highlight-1 d-inline-block p-relative"><span class="p-relative z-index-2">saying!</span><img width="100%" src="assets/img/demos/marketing-1/svg/generic-3.svg" alt=""></span></h3>
                            </div>
                        </div>
                        <div class="col-lg-6 py-5">
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                                <div class="owl-carousel custom-owl-carousel-1 owl-theme stage-margin rounded-nav nav-icon-1 nav-size-md nav-position-1" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'margin': 10, 'autoHeight': true, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                    <div>
                                        <div class="pe-5">
                                            <p class="text-dark text-4-5 line-height-9">Beyound expectations with their innovative marketing strategies. They took the time to understand our brand, delivering targeted campaigns that significantly boosted.</p>
                                            <strong class="text-color-primary text-uppercase font-weight-medium">John Doe, Porto Theme</strong>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="pe-5">
                                            <p class="text-dark text-4-5 line-height-9">Outstanding social media management! Our engagement doubled, and our brand presence has never been stronger. Highly recommend their services.</p>
                                            <strong class="text-color-primary text-uppercase font-weight-medium">Robert Doe, Porto Theme</strong>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="pe-5">
                                            <p class="text-dark text-4-5 line-height-9">Their market research was incredibly thorough. It provided valuable insights that shaped our entire marketing strategy. Couldn't be happier with the outcome!</p>
                                            <strong class="text-color-primary text-uppercase font-weight-medium">Monica Doe, Porto Theme</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    @endsection
