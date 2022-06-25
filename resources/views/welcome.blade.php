@extends('layout.master')
@section('title', 'Home')

@section('content')
<!-- Heroslider Area -->
<div class="heroslider-area">

    <!-- Heroslider Slider -->
    <div class="heroslider-slider tm-slider-dots tm-slider-dots-left">
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/master_builder_1.jpg') }}"></div>
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/master_builder_2.jpg') }}"></div>
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/master_builder_3.jpg') }}"></div>
    </div>
    <!--// Heroslider Slider -->

    <!-- Heroslider Content -->
    <div class="heroslider-contentwrapper">
        <div class="heroslider-overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="heroslider-content">
                        <h1 class="wow fadeInUp tm-animated-text" data-in-effect="rollIn" data-out-effect="fadeOutDown" data-out-shuffle="true" data-wow-delay="0.5s">We are Providing Best Business Service</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">Business plan draws on a wide range of
                            knowledge from many
                            different business
                            disciplines</p>
                        <a href="{{ url('about-us') }}" class="tm-button wow fadeInUp" data-wow-delay="0.9s">About Us<b></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Heroslider Content -->

</div>
<!--// Heroslider Area -->

<main class="main-content">

    <!-- Features Area -->
    <div class="tm-section features-area bg-white tm-padding-section-top">
        <div class="container">
            <div class="row no-gutters feature-wrapper-2 justify-content-center">

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="tm-feature2 text-center">
                        <span class="tm-feature2-icon">
                            <i class="flaticon-planning"></i>
                        </span>
                        <h5>Business Strategy</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt
                            labore
                            etdolore magna aliqua. </p>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="tm-feature2 text-center">
                        <span class="tm-feature2-icon">
                            <i class="flaticon-diagram"></i>
                        </span>
                        <h5>Business Growth</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt
                            labore
                            etdolore magna aliqua. </p>
                    </div>
                </div>
                <!--// Single Feature -->

                <!-- Single Feature -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="tm-feature2 text-center">
                        <span class="tm-feature2-icon">
                            <i class="flaticon-chart"></i>
                        </span>
                        <h5>Financial Planning</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt
                            labore
                            etdolore magna aliqua. </p>
                    </div>
                </div>
                <!--// Single Feature -->

            </div>
        </div>
    </div>
    <!--// Features Area -->

    <!-- About Us -->
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about-content">
                        <h2>Quality Policy</h2>
                        <p style="text-align:justify;">Total Solutions recognises the importance of “quality”,  so we  always provide Top notch products to our  clients by  identifying their needs and expectations and then provide them high quality products that not only meet but  exceed our clients expectation, We have implemented ISO 9001 quality standards in our organization and all the management , staff and business process is working according to its standards.</p>
                        <ul class="stylish-list">
                            <li><i class="far fa-check-square"></i>Pumps</li>
                            <li><i class="far fa-check-square"></i>D.I. Pipes</li>
                            <li><i class="far fa-check-square"></i>Breathing Respirator</li>
                            <li><i class="far fa-check-square"></i>Safety Instruments</li>
                            <li><i class="far fa-check-square"></i>Construction Chemicals</li>
                            <li><i class="far fa-check-square"></i>Valves</li>
                        </ul>
                        <a href="{{ url('about-us') }}" class="tm-button">About Us <b></b></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-image">
                        <img src="{{ asset('public/images/others/tsa_4.jpg') }}" alt="about image">
                        <div class="tm-videobutton">
                            <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                <span><i class="fas fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Us -->

    <!-- Funfact Area -->
    <div class="tm-section funfact-area tm-padding-section" data-bgimage="url(('{{ asset('public/images/funfact/funfact-bg.jpg') }}')" data-black-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-12">
                    <div class="funfact-headline">
                        <h4>We have over</h4>
                        <h2><span>20 years</span> of experience</h2>
                    </div>
                </div>
                <div class="col-xl-7 col-12">
                    <div class="row no-gutters mt-30-reverse funfact-wrapper">

                        <!-- Funfact Single -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                            <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-check-mark"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="500"></span>
                                    <h5>Projects Complete</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Funfact Single -->

                        <!-- Funfact Single -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                            <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-smile"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="3210"></span>
                                    <h5>Happy Clients</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Funfact Single -->

                        <!-- Funfact Single -->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30">
                            <div class="tm-funfact">
                                <span class="tm-funfact-icon">
                                    <i class="flaticon-trophy"></i>
                                </span>
                                <div class="tm-funfact-content">
                                    <span class="odometer" data-count-to="159"></span>
                                    <h5>Awards</h5>
                                </div>
                            </div>
                        </div>
                        <!--// Funfact Single -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--// Funfact Area -->

    <!-- Services Area -->
    <div class="tm-section services-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Facilities We Provide</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>
            <div class="row services-wrap-2">

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-idea"></i>
                        </span>
                        <h5><a href="service-details.html">Business Growth</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-options"></i>
                        </span>
                        <h5><a href="service-details.html">Business Strategy</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-leadership"></i>
                        </span>
                        <h5><a href="service-details.html">Build Leadership</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-responsive"></i>
                        </span>
                        <h5><a href="service-details.html">Responsive</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-password"></i>
                        </span>
                        <h5><a href="service-details.html">Secure Services</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-24-hours"></i>
                        </span>
                        <h5><a href="service-details.html">24 hours support</a></h5>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum.</p>
                    </div>
                </div>
                <!--// Single Service -->

            </div>
        </div>
    </div>
    <!--// Services Area -->

    <!-- Testimonial Area -->
    <div class="tm-section testimonial-area bg-grey">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="tm-testimonial2-videoslider">

                        <div class="tm-testimonial2-video">
                            <img src="{{ asset('public/images/testimonial/testimonial-fullimage-1.jpg') }}" alt="testimonial author image">
                            <div class="tm-videobutton">
                                <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                    <span><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                        </div>

                        <div class="tm-testimonial2-video">
                            <img src="{{ asset('public/images/testimonial/testimonial-fullimage-2.jpg') }}" alt="testimonial author image">
                            <div class="tm-videobutton">
                                <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                    <span><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                        </div>

                        <div class="tm-testimonial2-video">
                            <img src="{{ asset('public/images/testimonial/testimonial-fullimage-3.jpg') }}" alt="testimonial author image">
                            <div class="tm-videobutton">
                                <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                                    <span><i class="fas fa-play"></i></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tm-testimonial2-contentslider tm-slider-dots">

                        <div class="tm-testimonial2-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                                ncididunt ametfh consectetur dolore magna aliqua.</p>
                            <div class="tm-testimonial2-author">
                                <div class="tm-testimonial2-authorimage">
                                    <img src="{{ asset('public/images/testimonial/testimonial-image-1.png') }}" alt="author image">
                                </div>
                                <h5>Nancy Wise</h5>
                                <p>Web Developer</p>
                            </div>
                            <i class="fas fa-quote-left"></i>
                        </div>

                        <div class="tm-testimonial2-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                                ncididunt ametfh consectetur dolore magna aliqua.</p>
                            <div class="tm-testimonial2-author">
                                <div class="tm-testimonial2-authorimage">
                                    <img src="{{ asset('public/images/testimonial/testimonial-image-2.png') }}" alt="author image">
                                </div>
                                <h5>Nancy Wise</h5>
                                <p>Web Developer</p>
                            </div>
                            <i class="fas fa-quote-left"></i>
                        </div>

                        <div class="tm-testimonial2-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                                ncididunt ametfh consectetur dolore magna aliqua.</p>
                            <div class="tm-testimonial2-author">
                                <div class="tm-testimonial2-authorimage">
                                    <img src="{{ asset('public/images/testimonial/testimonial-image-3.png') }}" alt="author image">
                                </div>
                                <h5>Nancy Wise</h5>
                                <p>Web Developer</p>
                            </div>
                            <i class="fas fa-quote-left"></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--// Testimonial Area -->

    <!-- Pupular Products -->
    <div class="tm-section product-section tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="tm-section-title text-center">
                        <h2>Our Latest Products</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>

            <!-- Tab Buttons -->
            <ul class="nav tm-tabgroup" id="bstab1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="#bstab1-area1" role="tab" aria-controls="bstab1-area1" aria-selected="true">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="#bstab1-area2" role="tab" aria-controls="bstab1-area2" aria-selected="false">Popular</a>
                </li>
            </ul>
            <!--// Tab Buttons -->

            <!-- Tab Content -->
            <div class="tab-content" id="bstab1-ontent">
                <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel" aria-labelledby="bstab1-area1-tab">

                    <div class="product-vertical-slider-active tm-slider-dots tm-slider-dots-vertical">
                        <div class="product-vertical-slider-row">
                            <div class="row mt-30-reverse">

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-1.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Watch</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h6 class="tm-product-price">$99.99</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-2.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Creative
                                                    3d Mug</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price"><del>$110.50</del> $99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-3.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Notebook P-450</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-4.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Awesome
                                                    Flower Tub</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                            </div>
                        </div>
                        <div class="product-vertical-slider-row">
                            <div class="row mt-30-reverse">

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-3.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Notebook P-450</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-4.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Awesome
                                                    Flower Tub</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-1.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Watch</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h6 class="tm-product-price">$99.99</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-2.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Creative
                                                    3d Mug</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price"><del>$110.50</del> $99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">
                    <div class="product-vertical-slider-active tm-slider-dots tm-slider-dots-vertical">

                        <div class="product-vertical-slider-row">
                            <div class="row mt-30-reverse">

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-3.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Notebook P-450</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-4.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Awesome
                                                    Flower Tub</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-1.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Watch</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h6 class="tm-product-price">$99.99</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-2.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Creative
                                                    3d Mug</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price"><del>$110.50</del> $99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                            </div>
                        </div>
                        <div class="product-vertical-slider-row">
                            <div class="row mt-30-reverse">

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-1.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Watch</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h6 class="tm-product-price">$99.99</h6>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-2.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Creative
                                                    3d Mug</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price"><del>$110.50</del> $99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-3.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Pipple
                                                    Notebook P-450</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                                <!-- Single Product -->
                                <div class="col-lg-3 col-lg-3 col-md-6 col-sm-6 col-12 mt-30">
                                    <div class="tm-product">
                                        <div class="tm-product-image">
                                            <a class="tm-product-imagelink" href="product-details.html">
                                                <img src="{{ asset('public/images/product/product-image-4.jpg') }}" alt="product image">
                                            </a>
                                            <ul class="tm-product-actions">
                                                <li><a href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>
                                                <li><button type="button" data-toggle="modal" data-target="#tm-product-quickview"><i class="far fa-eye"></i></button></li>
                                            </ul>
                                        </div>
                                        <div class="tm-product-content">
                                            <h5 class="tm-product-title"><a href="product-details.html">Awesome
                                                    Flower Tub</a></h5>
                                            <div class="tm-product-rating">
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                                <span class="active"><i class="fas fa-star"></i></span>
                                            </div>
                                            <h5 class="tm-product-price">$99.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Tab Content -->

        </div>
    </div>
    <!--// Pupular Products -->

    <!-- Promo Offer Area -->
    <div class="tm-section promo-area bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 align-self-end">
                    <div class="tm-promo-image-2">
                        <img class="wow fadeInLeft" src="{{ asset('public/images/others/promo-image-2.png') }}" alt="promo image">
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="tm-promo-content tm-padding-section">
                        <h2><span class="color-theme">40%</span> off</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's.</p>
                        <div class="tm-countdown" data-countdown="2020/08/12"></div>
                        <a href="shop.html" class="tm-button">Shop Now <b></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Promo Offer Area -->

    <!-- Latest Blog Area -->
    <div class="tm-section latest-blog-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="tm-section-title text-center">
                        <h2>Latest Blog Post</h2>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blog-slider-active">

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-1.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-2.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-3.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-4.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-5.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <img src="{{ asset('public/images/blog/blog-image-6.jpg') }}" alt="blog image">
                    </div>
                    <div class="tm-blog-content">
                        <h4><a href="blog-details.html">A special day at the new office</a></h4>
                        <div class="tm-blog-meta">
                            <span>By <a href="blog.html">Keely</a></span>
                            <span>Tuesday, Sep 26, 2018</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, in quodsi vulputat pro. Ius illum vocent mediocritatem
                            an cule dicta iriure at phaedrum. </p>
                        <div class="tm-blog-contentbottom">
                            <a href="blog-details.html" class="tm-readmore">Read more <i class="fas fa-chevron-right"></i></a>
                            <a href="blog-details.html">Comment 02</a>
                        </div>
                    </div>
                    <div class="tm-blog-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

        </div>
    </div>
    <!--// Latest Blog Area -->

    <!-- Brand Logos Area -->
    <div class="tm-section brand-logos-area tm-padding-section-bottom bg-white">
        <div class="container">
            <div class="brandlogo-slider">

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img src="{{ asset('public/images/brands/grundfos.png') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img src="{{ asset('public/images/brands/master_builders.jpeg') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/ebara.png') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img src="{{ asset('public/images/brands/rashmi_group.png') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img src="{{ asset('public/images/brands/bosean.png') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

                <!-- Brang Logo Single -->
                <div class="brandlogo">
                    <a href="#">
                        <img src="{{ asset('public/images/brands/doowin.png') }}" alt="brand-logo">
                    </a>
                </div>
                <!--// Brang Logo Single -->

            </div>
        </div>
    </div>
    <!--// Brand Logos Area -->

</main>

@stop