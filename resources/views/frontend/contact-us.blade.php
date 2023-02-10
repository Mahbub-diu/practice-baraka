@extends('frontend.layouts.layout')

@section('content')
    @include('frontend.includes.navbar')
    @include('frontend.includes.common-banner')
    <section class="contact-form-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="contac-layout-main">
                        <div class="left-box">
                            <h3>contact information</h3>
                            <div class="section-description">
                                <p class="section-content">
                                    It all starts with a phone call or email, Enter your details in the below form &amp; we
                                    will
                                    contact you within 24 hours.You can also send email to info@barakapower.com

                                </p>
                            </div>

                        </div>
                        <div class="right-box">
                            <form action="http://ec2-54-169-196-237.ap-southeast-1.compute.amazonaws.com/contact-us-store"
                                id="submit_form" method="POST" class="ajax-contact">
                                <input type="hidden" name="_token" value="tvMcBSBcSCBOVEZmqJSBVI5a6oLVguBPPLtGBTRV">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="frst_name" id="frst_name" class="form-control"
                                                placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Phone No.">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="topic" id="topic" class="form-control"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea cols="" rows="" id="discussion" name="discussion" class="form-control" aria-invalid=""
                                                placeholder="Message" style="height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group text-end mb-0">
                                            <button class="btn vs-btn" type="submit">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-main">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <div class="card">

                        <div class="card-body">

                            <div class="address-details">
                                <h1 class="location-title">Dhaka Office</h1>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-home"></i></div>
                                            <div class="content">6/A/1 (1st &amp; 2nd floor), Segunbagicha, Dhaka-1000,
                                                Bangladesh</div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-phone"></i></div>
                                            <div class="content">Phone: +88 02 223352305,223380339</div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-fax"></i></div>
                                            <div class="content">Fax: +88 02 223383117</div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-envelope"></i></div>

                                            <div class="content">info@bpplbd.com</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <div class="card">

                        <div class="card-body">

                            <div class="address-details">
                                <h1 class="location-title">Sylhet Office</h1>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-home"></i></div>
                                            <div class="content">Khairun Bhaban (6th floor), Mirboxtola, Sylhet-3100,
                                                Bangladesh.</div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-phone"></i></div>
                                            <div class="content">Phone: +88-0821-711815</div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-fax"></i></div>
                                            <div class="content"></div>

                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <div class="icon-box"><i class="icofont-envelope"></i></div>

                                            <div class="content">info@bpplbd.com</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
