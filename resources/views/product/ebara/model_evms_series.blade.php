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
                                <a href="{{ asset('public/images/product/ebara/pumps model EVMS Series.png') }}">
                                    <img src="{{ asset('public/images/product/ebara/pumps model EVMS Series.png') }}" alt="portfolio details">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Model EVMS Series</h3>
                                <h6>In-line vertical multistage pump</h6>
                                <p>The Shurricane impeller, patented by EBARA in AISI 316 steel, with its innovative shape, ensures a reduction of the axial load that usually rests on the bearings, ensuring maximum efficiency in the market and also allowing the use of any standardised motor in the market.</p>
                                <p>The cartridge-type mechanical seal allows easy maintenance. Its replacement involves a simple operation without having to disassemble the motor support. The seals used are in compliance with EN12756 and easily available on the market if required.</p>
                                <p>The wide variety of connections available that meet all the needs depending on the application, the pumped liquid, the system on which they are to be installed, DIN round flanges, DIN mobile flanges, oval flanges, Victaulic and Clamp joint.</p>
                                <p>The vent cap, conceived and designed to avoid the problem of dry running: it is in fact positioned specifically above the level of the mechanical seal, to ensure the bleeding of any air bubbles.</p>
                                <p>Standard connection for pressure sensor available for quick connection, in case of presence of inverter or other control systems. 3/8"loading and unloading plugs as standard or suitable for connecting a pressure gauge.</p>
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