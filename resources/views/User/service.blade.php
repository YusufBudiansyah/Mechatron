@extends('User.base')
@section('main_content')

<!-- Modal Popup -->
<div class="modal fade" id="eventPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> <!-- Modal Pop Up -->

<div role="main" class="main">
    <section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
        <div class="container">
            <div class="row py-lg-5 text-center text-lg-start">
                <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                    <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                        <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Service</mark></h1>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                        <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                        <li class="active text-color-primary text-transform-none">Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container py-4 my-5">
        <div class="row mb-4 pb-2">
            <div class="col">
                <p class="text-4 font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get reliable & affordable auto services for your facility with a 100% satisfaction guaranteed! </p>
                <p class="pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. </p>
                <p class="mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
            </div>
        </div>
        <div class="row row-gutter-sm mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/stage" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Stage Level</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/activities" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-2.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Activities & Programs</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/hardware" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Hardware & Programming</h3>
                    </div>
                </a>
            </div> -->

    <div class="container py-4 my-5">
        <div class="row mb-4 pb-2">
            <div class="col">
                <p class="text-4 font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                    Get reliable & affordable auto services for your facility with a 100% satisfaction guaranteed!
                </p>
                <p class="pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt
                    id enim sodales, rhoncus malesuada ligula.
                </p>
                <p class="mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit.
                </p>
            </div>
        </div>
        <div class="row row-gutter-sm mb-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/stage" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-1.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Stage Level</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/activities" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-2.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Acitivies & Programs</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4">
                <a href="/hardware" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Hardware & Programming</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Transmission Repair</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3 text-center mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Transmission Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Suspension Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-sm-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-2.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Check Engine</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-1.jpg" class="img-fluid" alt="" />
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Brake Repair</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- <div class="col-sm-6 col-lg-3 text-center">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Transmission Repair</h3>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-3 text-center mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-4.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Transmission Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-lg-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-3.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Suspension Repair</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-4 mb-sm-0">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-2.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Check Engine</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 text-center">
                <a href="demo-auto-services-services-detail.html" class="text-decoration-none">
                    <div class="custom-thumb-info-style-1 thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <div class="thumb-info-wrapper">
                            <img src="assets/img/demos/auto-services/services/service-small-1.jpg" class="img-fluid" alt="">
                        </div>
                        <h3 class="text-transform-none font-weight-bold text-5 mt-2 mb-0">Stage Level</h3>
                    </div>
                </a>
            </div>
        </div>
    </div> -->

    <section class="section border-0 m-0">
        <div class="container pb-3 my-5">
            <div class="row justify-content-center pb-3 mb-4">
                <div class="col text-center">
                    <div class="overflow-hidden">
                        <h2 class="font-weight-bold text-color-dark line-height-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">See What Clients Are Saying</h2>
                    </div>
                    <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                        <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim" data-appear-animation-delay="600">
                    </div>
                    <p class="font-weight-bold text-3-5 mb-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500">We are very proud of the service we provide and stand by every product we carry.</p>
                    <p class="font-weight-light text-3-5 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">Read our testimonials from our happy customers.</p>
                </div>
            </div>
            <div class="row appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1000">
                <div class="col">
                    <div class="owl-carousel nav-outside nav-style-1 nav-dark nav-arrows-thin nav-font-size-lg custom-carousel-box-shadow-1 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 2}, '1199': {'items': 3}}, 'autoplay': true, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': false, 'nav': true, 'loop': true, 'margin': 15, 'stagePadding': '75'}">
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Smith</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card custom-border-radius-1">
                                <div class="card-body">
                                    <div class="custom-testimonial-style-1 testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote text-center mb-0">
                                        <blockquote>
                                            <p class="text-color-dark text-3 font-weight-light px-0 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold">John Doe</strong></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection