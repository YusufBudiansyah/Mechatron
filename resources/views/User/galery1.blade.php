@extends('User.base')
@section('main_content')

<section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
    <div class="container">
        <div class="row py-lg-5 text-center text-lg-start">
            <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                    <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Galery</mark></h1>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                    <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                    <li class="active text-color-primary text-transform-none">Galery</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="ajax-container">
    <div class="row align-items-center py-4">

        <div class="col">
            <a href="/galery" data-ajax-portfolio-prev class="text-decoration-none d-block float-start">
                <div class="d-flex align-items-center line-height-1">
                    <i class="fas fa-arrow-left text-dark text-4 me-3"></i>
                    <div class="d-none d-sm-block line-height-1">
                        <span class="text-dark opacity-4 text-1">PREVIOUS PROJECT</span>
                        <h4 class="font-weight-bold text-3 mb-0">Galery</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <div class="overflow-hidden pb-2">
                        <h2 class="text-dark font-weight-bold text-7 mb-0">Galery</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="#" data-ajax-portfolio-next class="text-decoration-none d-block float-end">
                <div class="d-flex align-items-center text-end line-height-1">
                    <div class="d-none d-sm-block line-height-1">
                        <span class="text-dark opacity-4 text-1">NEXT PROJECT</span>
                        <h4 class="font-weight-bold text-3 mb-0">Porto Watch</h4>\

                    </div>
                    <i class="fas fa-arrow-right text-dark text-4 ms-3"></i>
                </div>
            </a>
        </div>

    </div>

    <div class="row pb-4 mb-2">
        <div class="col-sm-6">

            <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <div>
                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                        <img src="assets/img/projects/project-short.jpg" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                        <img src="assets/img/projects/project-short-2.jpg" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
                <div>
                    <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                        <img src="assets/img/projects/project-short-3.jpg" class="img-fluid border-radius-0" alt="">
                    </div>
                </div>
            </div>


            <hr class="solid my-5">

            <strong class="text-uppercase text-1 me-3 text-dark float-start position-relative top-2">Share</strong>
            <ul class="social-icons">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>

        </div>
        <div class="col-sm-6">
            <h2 class="text-color-dark font-weight-normal text-4 mb-0">Project <strong class="font-weight-extra-bold">Description</strong></h2>
            <p>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

            <h2 class="text-color-dark font-weight-normal text-4 mb-0 mt-4">Project <strong class="font-weight-extra-bold">Details</strong></h2>
            <ul class="list list-icons list-primary list-borders text-2">
                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Client:</strong> Okler Themes</li>
                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> January 2024</li>
                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">DESIGN</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">BRAND</a><a href="#" class="badge badge-dark badge-sm rounded-pill px-2 py-1 ms-1">WEBSITES</a></li>
                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Project URL:</strong> <a href="#" target="_blank" class="text-dark">http://www.okler.net</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection