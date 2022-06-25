@extends('layout.master')
@section('title', 'Grundfos')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/brands/grundfos/grundfos_header.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Grundfos</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Grundfos Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Portfolio Details Area -->
    <div class="tm-section portfolio-details-area bg-white tm-padding-section">
        <div class="container">
            <div class="tm-portfoliodetails">
                <div class="tm-portfoliodetails-image tm-portfoliodetails-gallery tm-slider-arrow">
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/1_utility_range.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/1_utility_range.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/2_cr_poump_booster_set.png') }}">
                            <img src="{{ asset('public/images/brands/grundfos/2_cr_poump_booster_set.png') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/3_grundfos_set.png') }}">
                            <img src="{{ asset('public/images/brands/grundfos/3_grundfos_set.png') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/4_end_suction_pump.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/4_end_suction_pump.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/5_vertical_multistage_centrifugal_pump.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/5_vertical_multistage_centrifugal_pump.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/6_double_suction_horizontal_centrifugal_pump.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/6_double_suction_horizontal_centrifugal_pump.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/7_different_size_cr_pumps.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/7_different_size_cr_pumps.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/8_submersible_grinder_pump.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/8_submersible_grinder_pump.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>

                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/grundfos/9_cr_pump.jpg') }}">
                            <img src="{{ asset('public/images/brands/grundfos/9_cr_pump.jpg') }}" alt="portfolio details" style="height: 872px;">
                        </a>
                    </div>
                </div>
                <div class="tm-portfoliodetails-content tm-padding-section-sm-top">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Project Description</h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the
                                    majority
                                    have suffered alteration in some form, by injected humour, or randomised
                                    words
                                    which don't look even slightly believable. If you are going to use a
                                    passage of
                                    Lorem Ipsum you need to be sure there isn't anything embarrassing hidden in
                                    the
                                    middle of text.</p>
                                <p>Magnam repudiandae cumque ut exercitationem eos dolor consequatur voluptas
                                    beatae. Voluptas dolore nobis delectus alias eum rem. Et minus sed.
                                    Voluptas inventore ut inventore. Occaecati est et temporibus.</p>
                                <ul class="stylish-list">
                                    <li><i class="far fa-check-square"></i>Irrigation and Agriculture</li>
                                    <li><i class="far fa-check-square"></i>Pressure Boosting</li>
                                    <li><i class="far fa-check-square"></i>WasteWater Experts</li>
                                    <li><i class="far fa-check-square"></i>Water Treatment</li>
                                    <li><i class="far fa-check-square"></i>Cooling Systems</li>
                                    <li><i class="far fa-check-square"></i>Heating System</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Portfolio Details Area -->

</main>
<!--// Main Content -->
@stop