@extends('layout.master')
@section('title', 'Vision & Mission')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/tsa_4.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Vision and Mission</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Vision and Mission</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Vision and Mission Area -->
    <div class="tm-section services-area tm-padding-section bg-white">
        <div class="container">
            <div class="row services-wrap-2">

                <!-- Vision -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-idea"></i>
                        </span>
                        <h5>Vision</h5>
                        <p>To be the First Choice products supplying partner.</p>
                    </div>
                </div>
                <!--// Vision -->

                <!-- Mission -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 wow fadeInUp">
                    <div class="tm-service2 text-center">
                        <span class="tm-service2-icon">
                            <i class="flaticon-options"></i>
                        </span>
                        <h5>Mission</h5>
                        <p>Provide Top Notch  products at best price.</p>
                    </div>
                </div>
                <!--// Mission -->

            </div>
        </div>
    </div>
    <!--// Vision and Mission Area -->

</main>
<!--// Main Content -->
@stop