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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Brands</li>
                        <li>Grundfos</li>
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
                                <h3>Grundfos</h3>
                                <p>Grundfos is one of the dominant pump manufacturers in the world. We are the authorized supplier for Grundfos water pump. Supplies a wide range of pumps for various applications such as commercial air conditioning, commercial heating, hot water recirculation, water pressure boosting, water disinfection, wastewater, district cooling, district heating, groundwater intake, surface water intake, rainwater harvesting, Irrigation, solar water solutions, community water supply, flood control, wastewater transport, wastewater treatment, Irrigation groundwater supply, etc</p>
                                <ul class="stylish-list">
                                    <li><i class="far fa-check-square"></i>Water</li>
                                    <li><i class="far fa-check-square"></i>Waste Water</li>
                                    <li><i class="far fa-check-square"></i>Irrigation</li>
                                    <li><i class="far fa-check-square"></i>Pressure Boosting</li>
                                    <li><i class="far fa-check-square"></i>Transfer</li>
                                    <li><i class="far fa-check-square"></i>HVAC</li>
                                    <li><i class="far fa-check-square"></i>Dewatring</li>
                                    <li><i class="far fa-check-square"></i>Dosing</li>
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