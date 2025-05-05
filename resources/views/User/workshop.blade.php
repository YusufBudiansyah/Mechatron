@extends('User.base')
@section('main_content')


<div role="main" class="main">
    <section class="page-header page-header-modern custom-bg-color-1 page-header-lg mb-0">
        <div class="container">
            <div class="row py-lg-5 text-center text-lg-start">
                <div class="col-lg-8 order-2 order-lg-1 align-self-center p-static">
                    <div data-plugin-float-element data-plugin-options="{'minWindowWidth': 992, 'startPos': 'bottom', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000}">
                        <h1 class="text-color-dark font-weight-semi-bold text-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0"><mark class="bg-transparent d-inline-block p-0 mark mark-color mark-color-tertiary">Workshop</mark></h1>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 align-self-center">
                    <ul class="breadcrumb d-flex justify-content-center justify-content-lg-end text-4-5">
                        <li><a href="/landing" class="text-color-dark text-color-hover-primary text-transform-none text-decoration-none">Home</a></li>
                        <li class="active text-color-primary text-transform-none">Workshop</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop1">Amazing Mountain</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!--  <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop1" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop2">Creative Business</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop2" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop3">Unlimited Ways</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop3" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop4">Developer Life</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop4" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop5">The Blue Sky</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop5" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop6">Night Life</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!--  <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop6" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop7">Another World Perspective</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop7" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4 col-lg-3">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="blog-post.html">
                                        <img src="assets/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" style="width: 550px; height: 450px; object-fit: cover;" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">
                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="/workshop8">The Creative Team</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <!-- <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                        <span class="d-block mt-2"><a href="/workshop8" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <ul class="pagination float-end">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection