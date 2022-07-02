@extends('layout.master')
@section('title', 'Home')

@section('content')
<!-- Heroslider Area -->
<div class="heroslider-area">

    <!-- Heroslider Slider -->
    <div class="heroslider-slider tm-slider-dots tm-slider-dots-left">
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/heroslider-image-01.jpg') }}"></div>
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/heroslider-image-02.jpg') }}"></div>
        <div class="heroslider-singleslider" data-bgimage="{{ asset('public/images/heroslider/heroslider-image-02.jpg') }}"></div>
    </div>
    <!--// Heroslider Slider -->

    <!-- Heroslider Content -->
    <div class="heroslider-contentwrapper">
        <div class="heroslider-overlay2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="heroslider-content">
                        <h1 class="wow fadeInUp tm-animated-text" data-in-effect="rollIn" data-out-effect="fadeOutDown" data-out-shuffle="true" data-wow-delay="0.5s">Total Construction Solutions</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">Total Solutions Company offers various top notch product range for infrastructure and utilities sector</p>
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
                            <li><i class="far fa-check-square"></i>Safety Instruments</li>
                            <li><i class="far fa-check-square"></i>Construction Chemicals</li>
                        </ul>
                        <a href="{{ url('about-us') }}" class="tm-button">About Us <b></b></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="about-image">
                        <img src="{{ asset('public/images/others/quality-policy.jpg') }}" alt="quality policy">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Us -->

    <!-- Services Area -->
    <div class="tm-section services-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Facilities We Provide</h2>
                        <p>The goals are diversly classified in organising maintenance, repairs, safety and trusted quality of construction solutions.</p>
                    </div>
                </div>
            </div>
            <div class="row services-wrap-2">

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <img src="{{ asset('public/images/others/pump.png') }}" />
                        </span>
                        <h5><a href="service-details.html">Pumps</a></h5>
                        <p>Every industry today requires a pump somewhere in its operation. From food processing to oil wells, we provide solutions for all.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <img src="{{ asset('public/images/others/pipe.png') }}" />
                        </span>
                        <h5><a href="service-details.html">Ductile Iron Pipes</a></h5>
                        <p>Ductile Iron is the most preferred pipe material for water supply and pressure sewage application.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <img src="{{ asset('public/images/others/skyline.png') }}" />
                        </span>
                        <h5><a href="service-details.html">Construction Chemical Solutions</a></h5>
                        <p>Construction Chemical solutions offers advanced emulsion application for the construction, maintenance, repair and renovation of structures.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    &nbsp;
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <img src="{{ asset('public/images/others/helmet.png') }}" />
                        </span>
                        <h5><a href="service-details.html">Safety Tools</a></h5>
                        <p>The Company believes in the top most priority of safety protocols and its applications. Thus providing complete safety tools product range for the construction industry.</p>
                    </div>
                </div>
                <!--// Single Service -->

                <!-- Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    &nbsp;
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
                            <img src="{{ asset('public/images/testimonial/quote.jpg') }}" alt="testimonial author image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tm-testimonial2-contentslider tm-slider-dots">
                        <div class="tm-testimonial2-content">
                            <p style="font-size:15px;">Total Solutions Company offers various Top notch product range for infrastructure and utilities sector. We offer several products like Ductile Iron pipes , Pumps, Constructions Chemicals , concrete admixtures, concrete protection, floor coatings, epoxy coatings , water proofing , sealants, safety instruments, breathing respirators and much more under one umbrella with best competitive price without compromising the quality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Testimonial Area -->

    <!-- Latest Blog Area -->
    <div class="tm-section latest-blog-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="tm-section-title text-center">
                        <h2>Area of Expertise</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row blog-slider-active">

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <a href="#">
                            <img src="{{ asset('public/images/blog/product_1.jpg') }}" alt="blog image">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <a href="#">
                            <img src="{{ asset('public/images/blog/product_2.jpg') }}" alt="blog image">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <a href="#">
                            <img src="{{ asset('public/images/blog/product_3.jpg') }}" alt="blog image">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <a href="#">
                            <img src="{{ asset('public/images/blog/product_4.jpg') }}" alt="blog image">
                        </a>
                    </div>
                </div>
            </div>
            <!--// Single Blog -->

            <!-- Single Blog -->
            <div class="col">
                <div class="tm-blog">
                    <div class="tm-blog-image">
                        <a href="#">
                            <img src="{{ asset('public/images/blog/product_5.jpg') }}" alt="blog image">
                        </a>
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