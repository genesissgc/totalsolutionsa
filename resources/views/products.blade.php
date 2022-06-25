@extends('layout.master')
@section('title', 'Products')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/tsa_3.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Portfolio Area -->
    <div class="tm-section portfolio-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tm-portfolio-buttons text-center">
                        <button data-filter="*" class="is-active">All</button>
                        <button data-filter=".portfolio-pumps">Grundfos</button>
                        <button data-filter=".portfolio-business">Ebara</button>
                        <button data-filter=".portfolio-financial">Master Builder</button>
                        <!-- <button data-filter=".portfolio-investment">Investment</button>
                        <button data-filter=".portfolio-careative">Creative</button>
                        <button data-filter=".portfolio-technology">Technology</button> -->
                    </div>
                </div>
            </div>
            <div class="row tm-portfolio-wrapper">

                <!-- Ebara -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-pumps">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/product/ebara/pumps model EVMS Series.png') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/product/ebara/pumps model EVMS Series.png') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="{{ url('products/ebara/model_evms_series') }}">Model EVMS Series</a></h5>
                            <h6>In-line vertical multistage pump</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-pumps">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/product/ebara/pumps Model GS.png') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/product/ebara/pumps Model GS.png') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="{{ url('products/ebara/model_gs') }}">Model GS</a></h5>
                            <h6>Single-stage end suction pump</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-pumps">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/product/ebara/pumps Model FS.png') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/product/ebara/pumps Model FS.png') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="{{ url('products/ebara/model_fs') }}">Model FS</a></h5>
                            <h6>Single-stage end suction pump</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-pumps">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/product/ebara/pumps Model IBL.png') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/product/ebara/pumps Model IBL.png') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="{{ url('products/ebara/model_ibl') }}">Model IBL</a></h5>
                            <h6><a href="portfolio.html">Single-stage end suction pump</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Master -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-careative">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_1.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_1.jpg') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial portfolio-careative">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_2.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details-gallery.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_2.jpg') }}"><i class="far fa-images"></i></a>
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_3.jpg') }}"><i class="far fa-images"></i></a>
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_4.jpg') }}"><i class="far fa-images"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details-gallery.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_1.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details-video.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_2.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_2.jpg') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_1.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details-video.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-investment portfolio-careative">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_2.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_2.jpg') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-financial portfolio-investment">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_1.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_2.jpg') }}"><i class="fas fa-search-plus"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-business portfolio-technology">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_1.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details-video.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="https://www.youtube.com/watch?v=Sv511KEiIJQ"><i class="fas fa-play"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details-video.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

                <!-- Portfolio Single -->
                <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-investment">
                    <div class="tm-portfolio mt-30">
                        <div class="tm-portfolio-image">
                            <img src="{{ asset('public/images/portfolio/tsa_2.jpg') }}" alt="portfolio image">
                        </div>
                        <div class="tm-portfolio-content">
                            <ul class="tm-portfolio-actions">
                                <li class="link-button">
                                    <a href="portfolio-details-gallery.html"><i class="fas fa-link"></i></a>
                                </li>
                                <li class="zoom-button">
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_2.jpg') }}"><i class="far fa-images"></i></a>
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_3.jpg') }}"><i class="far fa-images"></i></a>
                                    <a href="{{ asset('public/images/portfolio/lg/tsa_4.jpg') }}"><i class="far fa-images"></i></a>
                                </li>
                            </ul>
                            <h5><a href="portfolio-details-gallery.html">New business idea platform</a></h5>
                            <h6><a href="portfolio.html">Financial</a></h6>
                        </div>
                    </div>
                </div>
                <!--// Portfolio Single -->

            </div>
        </div>
    </div>
    <!--// Portfolio Area -->

</main>
<!--// Main Content -->
@stop