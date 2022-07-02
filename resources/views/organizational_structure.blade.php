@extends('layout.master')
@section('title', 'Org. Structure')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/tsa_4.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Our Services</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Organization Structure</li>
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
            <a href="{{ asset('public/images/organizational_structure1.png') }}" target="_blank">
                <img src="{{ asset('public/images/organizational_structure1.png') }}" />
            </a>
        </div>
    </div>
    <!--// Vision and Mission Area -->

</main>
<!--// Main Content -->
@stop