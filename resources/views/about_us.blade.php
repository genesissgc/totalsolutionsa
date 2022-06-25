@extends('layout.master')
@section('title', 'About us')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/tsa_1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- About Us Area -->
    <div class="tm-section about-us-area bg-white tm-padding-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image2">
                        <img class="wow fadeInLeft" src="{{ asset('public/images/others/tsa_3.jpg') }}" alt="about image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Welcome to our company</h2>
                        <p style="text-align: justify;">Total Solutions Company offers various Top notch product range for infrastructure and utilities sector. We offer several products like Ductile Iron pipes , Pumps, Constructions Chemicals , concrete admixtures, concrete protection, floor coatings, epoxy coatings , water proofing , sealants, safety instruments, breathing respirators and much more under one umbrella with best competitive price without compromising the quality. </p>
                        <ul class="stylish-list">
                            <li><i class="far fa-check-square"></i>Pumps</li>
                            <li><i class="far fa-check-square"></i>D.I. Pipes</li>
                            <li><i class="far fa-check-square"></i>Breathing Respirator</li>
                            <li><i class="far fa-check-square"></i>Safety Instruments</li>
                            <li><i class="far fa-check-square"></i>Construction Chemicals</li>
                            <li><i class="far fa-check-square"></i>Valves</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// About Us Area -->

    <!-- Funfact Area -->
    <!--// Funfact Area -->

    <!-- Why Choose Area -->
    <!--// Why Choose Area -->

    <!-- Team Member Area -->
    <!--// Team Member Area -->

</main>
<!--// Main Content -->
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('public/js/chart.min.js') }}"></script>
<script src="{{ asset('public/js/chart-active.js') }}"></script>
@stop