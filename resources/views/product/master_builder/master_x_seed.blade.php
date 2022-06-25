@extends('layout.master')
@section('title', 'Master X-Seed')

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
                                <a href="{{ asset('public/images/portfolio/lg/portfolio-image-lg-1.jpg') }}">
                                    <img src="{{ asset('public/images/portfolio/lg/portfolio-image-lg-1.jpg') }}" alt="portfolio details">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Master X-Seed</h3>
                                <h6>Master X-Seed is a hardening accelerating admixture for concrete at early stage of curing</h6>
                                <p>Master Builders Solutions brand offers the revolutionary Master X-Seed product group that accelerates concrete hardening at early stages of curing.​​</p>
                                <p>Based on brand new technology, this unique product can double early strength performance and increase productivity in concrete production without affecting the other performance characteristics of the concrete. In particular, late strength development is not affected adversely.</p>
                                <p>The Master X-Seed product family comes with the Master Builders Solutions technical support team​​. By listening to our customers and working closely with them we are able to introduce new and exciting products and develop specific solutions for the most efficient and cost-effective concrete production.​

</p>
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