@extends('layout.master')
@section('title', 'Ebara')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/brands/ebara/end_suction_pump.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>EBARA</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Brands</li>
                        <li>EBARA</li>
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
                        <a href="{{ asset('public/images/brands/ebara/ebara_pumps.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/ebara_pumps.jpg') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/end_suction_pump.png') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/end_suction_pump.png') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/multi_stage _horizontal _pump.png') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/multi_stage _horizontal _pump.png') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/evms.png') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/evms.png') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/booster_pump_unit_1.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/booster_pump_unit_1.jpg') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/booster_pump_unit_2.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/booster_pump_unit_2.jpg') }}" alt="ebara">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/ebara/submersible_pump.png') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/ebara/submersible_pump.png') }}" alt="ebara">
                        </a>
                    </div>
                </div>
                <div class="tm-portfoliodetails-content tm-padding-section-sm-top">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>EBARA</h3>
                                <p>EBARA Corporation supports society, industry, and daily life around the world in many different fields, including our core product of pumps, fans, compressors and turbines, and semiconductor manufacturing.</p>
                                <ul class="stylish-list">
                                    <li><i class="far fa-check-square"></i>Water & Sewage</li>
                                    <li><i class="far fa-check-square"></i>Irrigation & Agriculture</li>
                                    <li><i class="far fa-check-square"></i>Building & Housing</li>
                                    <li><i class="far fa-check-square"></i>HVAC</li>
                                    <li><i class="far fa-check-square"></i>Electricity</li>
                                    <li><i class="far fa-check-square"></i>General Industry</li>
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