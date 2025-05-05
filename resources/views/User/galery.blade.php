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


<div class="container py-2">

    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
        <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
        <li class="nav-item" data-option-value=".kegiatan"><a class="nav-link text-2-5 text-uppercase" href="#">Kegiatan</a></li>
        <li class="nav-item" data-option-value=".kompetisi"><a class="nav-link text-2-5 text-uppercase" href="#">Kompetisi</a></li>
        <li class="nav-item" data-option-value=".brands"><a class="nav-link text-2-5 text-uppercase" href="#">Brands</a></li>
        <li class="nav-item" data-option-value=".medias"><a class="nav-link text-2-5 text-uppercase" href="#">Medias</a></li>
    </ul>

    <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2 pb-3 mb-3">
        <div class="row portfolio-list sort-destination popup-gallery-ajax" data-sort-id="portfolio">

            <div class="col-sm-6 col-lg-3 isotope-item brands">
                <div class="portfolio-item">
                    <a href="/galery1" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Presentation</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item medias">
                <div class="portfolio-item">
                    <a href="/galery2" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <span class="owl-carousel owl-theme dots-inside m-0" data-plugin-options="{'items': 1, 'margin': 20, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}"><span><img src="assets/img/projects/project-1.jpg" class="img-fluid border-radius-0" alt=""></span><span><img src="assets/mg/projects/project-1-2.jpg" class="img-fluid border-radius-0" alt=""></span></span>
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Porto Watch</span>
                                    <span class="thumb-info-type">Media</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item kompetisi">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-2.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-2.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Identity</span>
                                    <span class="thumb-info-type">Logo</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item kegiatan">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-3.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-27.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Porto Screens</span>
                                    <span class="thumb-info-type">Website</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item kompetisi">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-4.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-4.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Three Bottles</span>
                                    <span class="thumb-info-type">Logo</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item brands">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-5.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-5.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Company T-Shirt</span>
                                    <span class="thumb-info-type">Brand</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item kegiatan">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-6.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-6.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Mobile Mockup</span>
                                    <span class="thumb-info-type">Website</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 isotope-item medias">
                <div class="portfolio-item">
                    <a href="ajax/portfolio-ajax-project-7.html" data-ajax-on-modal>
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="assets/img/projects/project-7.jpg" class="img-fluid border-radius-0" alt="">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner">Porto Label</span>
                                    <span class="thumb-info-type">Media</span>
                                </span>
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('[data-ajax-on-modal]').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');

            $.ajax({
                url: url,
                success: function(data) {
                    $('.ajax-container').html(data);
                    $('#modalContainer').modal('show'); // Pastikan modal dengan ID ini ada
                }
            });
        });
    });
</script>
@endsection