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
                                <a href="{{ asset('public/images/product/ebara/pumps Model GS.png') }}">
                                    <img src="{{ asset('public/images/product/ebara/pumps Model GS.png') }}" alt="portfolio details">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Model GS</h3>
                                <h6>Single-stage end suction pump</h6>
                                
                                <span>Energy-saving Design</span>
                                <ul>
                                    <li>World top class pump efficiency achieved.</li>
                                    <li>Major improvement over our previous models by impeller designed using our proprietary 3D inverse design technology.</li>
                                    <li>Higher efficiency means lower energy consumption and motor output, and more compact size.</li>
                                </ul>
                                <br>
                                <span>Simple Maintenance</span>
                                <ul>
                                    <li>Back pull-out structure enables disassembly and inspection without removal of suction and discharge piping.</li>
                                    <li>Shield bearings eliminate need for adding or exchanging lubricating oil.</li>
                                    <li>Shaft seal flushing and quenching piping not required for the standard application.</li>
                                    <li>Air-bleeding not required.</li>
                                    <li>Simplified bearings and shaft seal enable easy assembly.</li>
                                </ul>
                                <br>
                                <span>International Standards</span>
                                <ul>
                                    <li>Pump dimensions adopt EN733</li>
                                    <li>Mechanical seal adopts EN12756</li>
                                    <li>Protector fitted in accordance with EN294.</li>
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