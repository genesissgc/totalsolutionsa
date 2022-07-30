<div class="header">

    <!-- Header Top Area -->
    <div class="header-toparea">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-8 col-12">
                    <div class="header-topinfo">
                        <ul>
                            <li><a href="tel://+966 11 201 0706"><i class="flaticon-phone-call"></i>+966 11 201 0706</a></li>
                            <li><a href="mailto://&#105;&#110;&#102;&#111;&#64;&#116;&#111;&#116;&#97;&#108;&#115;&#111;&#108;&#117;&#116;&#105;&#111;&#110;&#115;&#97;&#46;&#99;&#111;&#109;"><i class="flaticon-envelope"></i>
                            &#105;&#110;&#102;&#111;&#64;&#116;&#111;&#116;&#97;&#108;&#115;&#111;&#108;&#117;&#116;&#105;&#111;&#110;&#115;&#97;&#46;&#99;&#111;&#109;</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-4 col-12">
                    <div class="header-topsocial">
                        <ul>
                            <li><a href="https://www.linkedin.com/in/total-solutions-company-1a8537237/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/TotalSo17795543"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Header Top Area -->

    <!-- Header Bottom Area -->
    <div class="header-bottomarea">
        <div class="container">
            <div class="header-bottominner">
                <div class="header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('public/images/logo/Logo Total Solution SA.png') }}" alt="logo" style="width: 300px;">
                    </a>
                </div>
                <nav class="tm-navigation">
                    <ul>
                        <li><a class="{{ Request::segment(1) === null ? 'active' : '' }}" href="{{ route('home') }}">{{ __('home') }}</a></li>
                        <li><a class="{{ Request::segment(1) === 'about-us' ? 'active' : '' }}" href="{{ route('about-us') }}">{{ __('about_us') }}</a></li>
                        <li class="tm-navigation-dropdown">
                            <a class="{{ Request::segment(1) === 'vision-and-mission' || Request::segment(1) === 'organizational-structure' ? 'active' : '' }}" href="{{ route('vision-and-mission') }}">{{ __('vision-and-mission') }}</a>
                            <ul>
                                <li><a href="{{ url('organizational-structure') }}">{{ __('organizational-structure') }}</a></li>
                            </ul>
                        </li>
                        <li class="tm-navigation-dropdown">
                            <a class="{{ Request::segment(1) === 'brands' ? 'active' : '' }}" href="javascript:void(0)">{{ __('brands') }}</a>
                            <ul>
                                <li><a href="{{ route('brands.grundfos') }}"><img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/grundfos.png') }}" /></a></li>
                                <li><a href="{{ route('brands.master-builders') }}"><img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/master_builders.jpeg') }}" /></a></li>
                                <li><a href="{{ route('brands.ebara') }}"><img style="width: 25%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/ebara.png') }}" /></a></li>
                                <li><a href="javascript:void(0)"><img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/rashmi_group.png') }}" /></a></li>
                                <li><a href="javascript:void(0)"><img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/bosean.png') }}" /></a></li>
                                <li><a href="javascript:void(0)"><img style="width: 50%;display: block;margin-left: auto;margin-right: auto;" src="{{ asset('public/images/brands/doowin.png') }}" /></a></li>
                            </ul>
                        </li>
                        <li class="tm-navigation-dropdown"><a href="javascript:void(0)">{{ __('products') }}</a>
                            <ul>
                                <li><a href="{{ url('products') }}">{{ __('pumps') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('construction-chemical-solutions') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('ductile-iron-pipes') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('safety-tools') }}</a></li>
                                <li><a href="javascript:void(0)">{{ __('pipe-plugs-water-stoppers') }}</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="{{ url('organizational-structure') }}">Organizational</a></li> --}}
                        <li><a class="{{ Request::segment(1) === 'contact-us' ? 'active' : '' }}" href="{{ url('contact-us') }}">{{ __('contact-us') }}</a></li>
                        
                        <li class="tm-navigation-dropdown">
                            <a><img src="{{ App::getLocale() == 'en' ? asset('public/images/icons/en.png'): asset('public/images/icons/ar.png') }}"/></a>
                            <ul>
                                @foreach (Config::get('languages') as $lang => $language)
                                    <li><a href="{{ route('lang.switch', $lang) }}"> <img src="{{ $lang == 'en' ? asset('public/images/icons/en.png'): asset('public/images/icons/ar.png') }}"/>&nbsp;{{$language}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-mobilemenu clearfix">
                <div class="tm-mobilenav"></div>
            </div>
        </div>
    </div>
    <!--// Header Bottom Area -->

</div>