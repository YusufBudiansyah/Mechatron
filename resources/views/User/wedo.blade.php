@extends('User.base')
@section('main_content')

<!-- Modal Popup -->
<!-- <div class="modal fade" id="eventPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="display: flex; justify-content: center">
                <img src="assets/img/admin-banner.png" alt="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --> <!-- Modal Pop Up -->

<div role="main" class="main">
    <section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
        <div class="container">
            <div class="row py-lg-5 text-center text-lg-start">
                <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                    <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                        <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Wedo</mark></h1>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                        <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                        <li class="active text-color-primary text-transform-none">Wedo</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-dark">

        <div class="container py-4 py-lg-5">
            <div class="row text-center text-lg-start py-lg-5">
                <div class="col pb-4 pt-4 mt-4">
                    <div class="overflow-hidden">
                        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="0">
                            <span class="bg-quaternary text-secondary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium me-2">What We Do</span>
                        </div>
                    </div>

                    <div class="row align-items-center pt-5">
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                    <img width="75" src="assets/img/demos/marketing-1/svg/icon-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                            </div>
                            <div class="p-relative z-index-1 pt-3">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Strategy</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Over a decade of driving consistent growth, delivering impactful results, and empowering brands to achieve their fullest potential</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                    <img width="75" src="assets/img/demos/marketing-1/svg/icon-2.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                            </div>
                            <div class="p-relative z-index-1 pt-3">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Marketing</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Millions in revenue generated through strategic campaigns, helping our clients achieve remarkable financial success and sustainable growth.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="text-lg-start">
                                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    <img width="75" src="assets/img/demos/marketing-1/svg/icon-3.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                            </div>
                            <div class="p-relative z-index-1 pt-3">
                                <h3 class="text-light mb-3 text-8 ls-0 line-height-1">Design</h3>
                                <p class="text-3-5 text-grey mb-4 pe-4">Partnered with hundreds of businesses across diverse industries, delivering tailored marketing solutions that drive results and foster long-term success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container my-5 pt-4 pb-5">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                <p class="text-3-5">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                <p class="pb-2 mb-4">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                <img src="assets/img/demos/auto-services/generic/generic-square-8.jpg" class="img-fluid custom-border-radius-1 float-start me-4 mb-4" alt="" />
                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus.</p>
                <p>
                    Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec
                    vehicula elit.
                </p>
                <img src="assets/img/demos/auto-services/generic/generic-square-9.jpg" class="img-fluid custom-border-radius-1 float-end ms-4 mb-4 mb-sm-0" alt="Sample image" />
                <br><br>
                <p class="mt-5 mt-md-0 mt-xl-5">
                    aku anak sehat tubuhku kuat karena mamah memberi sakatonik abc, halo aku adalah ironman, aku bisa terbang menggunakan mesin baja
                </p>
                <ul class="list list-icons list-icons-style-2 list-icons-lg mb-4 mb-xl-5">
                    <li class="font-weight-semibold text-color-dark">
                        <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                        Pellentesque ultricies nibh
                    </li>
                    <li class="font-weight-semibold text-color-dark">
                        <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                        Ultricies nibh pellen
                    </li>
                    <li class="font-weight-semibold text-color-dark">
                        <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                        Ultricies nibh pellen
                    </li>
                    <li class="font-weight-semibold text-color-dark">
                        <i class="fas fa-check text-color-dark border-color-grey-1 top-7 text-3"></i>
                        Pellentesque ultricies nibh
                    </li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt
                    id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt
                    id enim sodales, rhoncus malesuada ligula. Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. Nullam porttitor
                    augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit.
                </p>
            </div>
            <div class="col-lg-4 order-lg-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                <div class="card box-shadow-1 custom-border-radius-1 mb-5">
                    <div class="card-body z-index-1 py-4 my-3">
                        <h2 class="text-color-dark font-weight-bold text-6 mb-4">Stage Level</h2>
                        <ul class="custom-nav-list-effect-1 list list-unstyled mb-0">
                            <li class="active">
                                <a href="/intrakulikuler" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Intrakulikuler</a>
                            </li>
                            <li>
                                <a href="/ekstrakulikuler" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Ekstrakulikuler</a>
                            </li>
                            <li>
                                <a href="/seminar" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Seminar Robotic</a>
                            </li>
                            <li>
                                <a href="/workshop" class="text-decoration-none text-color-dark text-color-hover-primary text-3-5">Workshop Robotic</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-primary custom-border-radius-1">
                    <div class="card-body text-center py-5 my-2">
                        <h2 class="text-color-light font-weight-medium text-3 line-height-2 line-height-sm-1 mb-3 pb-1">LOOKING FOR HONEST AND RELIABLE SERVICES?</h2>
                        <h3 class="font-weight-bold text-color-light text-transform-none text-8 line-height-3 mb-3">Best Mechanics Downtown Los Angeles CA</h3>
                        <p class="font-weight-bold text-color-light text-4 opacity-7 mb-5">Make An Appointment Today With Our Online Form</p>
                        <div class="feature-box custom-feature-box-justify-center align-items-center text-start mb-4">
                            <div class="feature-box-icon bg-transparent">
                                <i class="icons icon-phone text-8 text-color-light"></i>
                            </div>
                            <div class="feature-box-info line-height-2 ps-1">
                                <span class="d-block text-4 font-weight-medium text-color-light mb-1">CALL US NOW</span>
                                <strong class="text-6"><a href="tel:+1234567890" class="text-color-light text-decoration-none">+123 4567 890</a></strong>
                            </div>
                        </div>
                        <a href="demo-auto-services-appointment.html" class="btn btn-light btn-outline custom-btn-border-radius font-weight-bold text-color-light text-color-hover-dark bg-color-hover-light btn-px-5 btn-py-3">MAKE AN APPOINTMENT</a>
                    </div>
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

    <div class="custom-bg-gradient-1 py-5">
        <div class="container py-5">
            <div class="row py-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <span class="bg-light text-primary d-inline-block text-3-5 rounded-pill px-4 py-1 font-weight-medium mb-3">Are You Ready?</span>
                        <h3 class="custom-font-1 mb-0">We handle every aspect of your marketing journey with expertise and dedication</h3>
                        <a href="#" class="text-dark text-hover-primary text-6 line-height-10 text-decoration-underline-2 border-width-2 d-inline-flex mt-5 font-weight-semibold">Let's Talk!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection