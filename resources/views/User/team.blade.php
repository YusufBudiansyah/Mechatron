@extends('User.base')
@section('main_content')
<div role="main" class="main">

    <section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
        <div class="container">
            <div class="row py-lg-5 text-center text-lg-start">
                <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                    <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                        <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Our Team</mark></h1>
                        <h4 class="mt-2 text-center text-lg-start">We are proud to introduce you to our team.</h4>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                        <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                        <li class="active text-color-primary text-transform-none">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Untuk bio team mechatron -->
    <div class="container py-5">        
    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
						<li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
						<li class="nav-item" data-option-value=".leadership"><a class="nav-link text-2-5 text-uppercase" href="#">Leadership</a></li>
						<li class="nav-item" data-option-value=".marketing"><a class="nav-link text-2-5 text-uppercase" href="#">Marketing</a></li>
						<li class="nav-item" data-option-value=".development"><a class="nav-link text-2-5 text-uppercase" href="#">Development</a></li>
						<li class="nav-item" data-option-value=".design"><a class="nav-link text-2-5 text-uppercase" href="#">Design</a></li>
					</ul>
                    
        <div class="row py-5">
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-1.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Emma Harris</span>
                                <em class="opacity-7 text-2-5">Chief Executive Officer</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-2.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Liam Johnson</span>
                                <em class="opacity-7 text-2-5">Chief Marketing Officer</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-3.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Olivia Reed</span>
                                <em class="opacity-7 text-2-5">Creative Director</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-4.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Noah Bennett</span>
                                <em class="opacity-7 text-2-5">Head of Digital Strategy</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-5.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Ava Carter</span>
                                <em class="opacity-7 text-2-5">Content Marketing Manager</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-6.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Ethan Moore</span>
                                <em class="opacity-7 text-2-5">Social Media Strategist</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-7.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">Sophia Collins</span>
                                <em class="opacity-7 text-2-5">SEO Specialist</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
            <div class="col-md-4 col-lg-3 pb-4">
                <span class="thumb-info thumb-info-show-button-hover custom-thumb-info thumb-info-no-overlay">
                    <span class="thumb-info-wrapper custom-border-radius-1">
                        <img src="assets/img/demos/marketing-1/team/team-8.jpg" class="img-fluid" alt="">
                        <span class="thumb-info-title bg-light w-100 mw-100">
                            <span class="thumb-info-inner text-dark pb-3">
                                <span class="text-4 pt-2 d-inline-flex">James Foster</span>
                                <em class="opacity-7 text-2-5">Account Manager</em>
                            </span>
                            <span class="d-inline-flex">
                                <ul class="social-icons social-icons-clean social-icons-medium mb-3">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-x"><a href="http://www.x.com/" target="_blank" title="X"><i class="fab fa-x-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </span>
                        </span>
                    </span>
                </span>
            </div>
        </div>
    </div>


    @endsection