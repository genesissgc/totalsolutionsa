@extends('layout.master')
@section('title', 'Contact us')

@section('content')
<!-- Breadcrumb Area -->
<div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('public/images/bg/tsa_contact_us.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tm-breadcrumb">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb Area -->

<!-- Main Content -->
<main class="main-content">

    <!-- Contact Us -->
    <div class="tm-section contact-us-area tm-padding-section bg-white">
        <div class="container">
            <div class="row justify-content-center mt-30-reverse">

                <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                    <div class="tm-contact-block text-center">
                        <span class="tm-contact-icon">
                            <i class="flaticon-placeholder"></i>
                        </span>
                        <h5>Address</h5>
                        <p>8221, Al Qadesiyah Street, Al Yasmin District Riyadh, Kingdom of Saudi Arabia</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                    <div class="tm-contact-block text-center">
                        <span class="tm-contact-icon">
                            <i class="flaticon-call"></i>
                        </span>
                        <h5>Phone</h5>
                        <p><a href="tel://+966 11 201 0706">+966 11 201 0706</a></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                    <div class="tm-contact-block text-center">
                        <span class="tm-contact-icon">
                            <i class="flaticon-email-1"></i>
                        </span>
                        <h5>Address</h5>
                        <p>Email: <a href="&#105;&#110;&#102;&#111;&#64;&#116;&#111;&#116;&#97;&#108;&#115;&#111;&#108;&#117;&#116;&#105;&#111;&#110;&#115;&#97;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#116;&#111;&#116;&#97;&#108;&#115;&#111;&#108;&#117;&#116;&#105;&#111;&#110;&#115;&#97;&#46;&#99;&#111;&#109;</a></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container tm-padding-section-top">
            @if(session('success_email'))
            <div class="alert alert-success">
                {{ session('success_email') }}
            </div>
            @endif
            <div class="row no-gutters">
                <div class="col-lg-7">
                    <div class="tm-contact-formwrapper">
                        <h5>Let’s get in touch</h5>
                        <form action="{{ url('send-email') }}" method="GET" class="tm-contact-form">
                            {{ csrf_field() }}
                            <div class="tm-contact-formfield">
                                <input type="text" name="name" placeholder="Name*">
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="tm-contact-formfield">
                                <input type="email" name="email" placeholder="Email*">
                                @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="tm-contact-formfield">
                                <input type="text" name="subject" placeholder="Subject*">
                                @if($errors->has('subject'))
                                <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="tm-contact-formfield">
                                <textarea name="message" cols="30" rows="5" placeholder="Message*"></textarea>
                                @if($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="tm-contact-formfield">
                                <button type="submit" class="tm-button">Send Message <b></b></button>
                            </div>
                        </form>
                        <p class="form-messages"></p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tm-contact-map">
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d906.2529637600294!2d46.67444408813356!3d24.692119199003464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0333f948f7e1%3A0x985e3a1e69cfad37!2sAbdullah%20Ibrahim%20Alsayegh%20And%20Sons%20Co.!5e0!3m2!1sen!2ssa!4v1598446299946!5m2!1sen!2ssa" frameborder="0" style="border:0;width:100%;height:565px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Contact Us -->

</main>
<!--// Main Content -->
@stop

@section('page-styles')

@stop

@section('page-script')

@stop