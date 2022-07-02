@extends('layout.master')
@section('title', 'Master Builders')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/brands/master-builders/2.jpeg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Master Builders</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Brands</li>
                        <li>Master Builders</li>
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
                        <a href="{{ asset('public/images/brands/master-builders/1.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/1.jpg') }}" alt="master-builder">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/master-builders/2.jpeg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/2.jpeg') }}" alt="master-builder">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/master-builders/3.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/3.jpg') }}" alt="master-builder">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/master-builders/4.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/4.jpg') }}" alt="master-builder">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/master-builders/5.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/5.jpg') }}" alt="master-builder">
                        </a>
                    </div>
                    <div class="tm-portfoliodetails-gallery-img">
                        <a href="{{ asset('public/images/brands/master-builders/6.jpg') }}">
                            <img class="page-slider" src="{{ asset('public/images/brands/master-builders/6.jpg') }}" alt="master-builder">
                        </a>
                    </div>
                </div>
                <div class="tm-portfoliodetails-content tm-padding-section-sm-top">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Master Builders</h3>
                                <p>Master Builders Solutions offers advanced chemical solutions for the construction, maintenance, repair and renovation of structures. The brand is built on more than 100 years of experience in the construction industry.</p>
                                <ul class="stylish-list">
                                    <li><i class="far fa-check-square"></i>Concrete Admixtures</li>
                                    <li><i class="far fa-check-square"></i>Cement Additives</li>
                                    <li><i class="far fa-check-square"></i>Chemical Solutions For Underground Construction</li>
                                    <li><i class="far fa-check-square"></i>Waterproofing Systems</li>
                                    <li><i class="far fa-check-square"></i>Sealants</li>
                                    <li><i class="far fa-check-square"></i>Repair Protection Systems</li>
                                    <li><i class="far fa-check-square"></i>Performance Grouts</li>
                                    <li><i class="far fa-check-square"></i>Performance Flooring Systems</li>
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