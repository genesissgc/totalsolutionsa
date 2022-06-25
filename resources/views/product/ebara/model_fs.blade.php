@extends('layout.master')
@section('title', 'Ebara')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/breadcrumb-bg-2.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Portfolio Details</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('products') }}">Product</a></li>
                        <li>Product Details</li>
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
                <div class="tm-portfoliodetails-content tm-padding-section-sm-top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="tm-portfoliodetails-image">
                                <a href="{{ asset('public/images/product/ebara/pumps Model FS.png') }}">
                                    <img src="{{ asset('public/images/product/ebara/pumps Model FS.png') }}" alt="portfolio details">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Model FS</h3>
                                <h6>Single-stage end suction pump</h6>
                                
                                <span>Features and Benefits</span>
                                <ul>
                                    <li>The series are 2-pole type which is in pursuit of small size and light weight and 4-pole type.</li>
                                    <li>Back pull-out type can be dissembled and inspected without removing the suction and discharge piping.</li>
                                    <li>Top centerline discharge, foot support under casing for maximum resistance to misalignment and distortion from pipe loads.</li>
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