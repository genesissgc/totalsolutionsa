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
                                <a href="{{ asset('public/images/product/ebara/pumps Model IBL.png') }}">
                                    <img src="{{ asset('public/images/product/ebara/pumps Model IBL.png') }}" alt="portfolio details">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="tm-portfoliodetails-description">
                                <h3>Model IBL</h3>
                                <h6>Single-stage end suction pump</h6>

                                <span>Features and Benefits</span>
                                <ul>
                                    <li>Back pull-out structure enables disassebly and inspection without removal of suction and discharge piping.</li>
                                    <li>High efficiency across a wide range of capacity.</li>
                                    <li>Can be used for suction pressure up to 7kgf/cm2.</li>
                                    <li>Quiet operation.</li>
                                    <li>Conforms JIMS and ISO2868 (excluding some models)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Portfolio Details Area -->

    <div class="tm-section services-area tm-padding-section bg-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="tm-section-title text-center">
                        <h2>Specifications</h2>
                    </div>
                </div>
            </div>
            <div class="tm-cart-table table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Standard</th>
                            <th>Optional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Liquid</td>
                            <td>Clear water 0 to 80°C</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Max. suction pressure</td>
                            <td>0.4MPa (4kgf/cm<sup>2</sup>)</td>
                            <td>0.41 to 0.7MPa (4.1 to 7.1kgf/cm<sup>2</sup>)</td>
                        </tr>
                        <tr>
                            <td>Max. working pressure</td>
                            <td>1.37MPa (14kgf/cm<sup>2</sup>)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Flange</td>
                            <td>JIS 10K normal type FF</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>Indoor</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td></td>
                            <td>Special common base</td>
                        </tr>
                        <tr>
                            <th colspan="3">Construction</th>
                        </tr>
                        <tr>
                            <td>Impeller</td>
                            <td>Enclosed</td>
                            <td>Self flushing (negative suction)</td>
                        </tr>
                        <tr>
                            <td>Shaft steal</td>
                            <td>Glank packing</td>
                            <td>External flushing (81 to 110°C)</td>
                        </tr>
                        <tr>
                            <td>Bearing</td>
                            <td>Sealed ball bearing (Oil-bath)</td>
                            <td>Casing with drain valve</td>
                        </tr>
                        <tr>
                            <th colspan="3">Materials</th>
                        </tr>
                        <tr>
                            <td>Casing</td>
                            <td>FC250</td>
                            <td rowspan="4">
                                <p>Impeller: CAC406 (FC200 model)</p>
                                <p>or SCS13 (FC400 model)</p>
                                <p>Shaft: SUS420J1 or SUS304</p>
                                <p>Shaft sleeve: SUS304</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Impeller</td>
                            <td>FC200 or FC400</td>
                        </tr>
                        <tr>
                            <td>Shaft</td>
                            <td>S35C or SCM440</td>
                        </tr>
                        <tr>
                            <td>Shaft sleeve</td>
                            <td>SUS420J1</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Motor</td>
                            <td style="text-align: justify; width: 35%">Three phase, 2 pole or 4 pole (For the available voltage, please refer to the attached “Voltage list”) TEFC Indoor type : 0.4 to 55kW ODP type : 72 to 250kW</td>
                            <td style="width: 30%">TEFC Outdoor type</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<!--// Main Content -->
@stop