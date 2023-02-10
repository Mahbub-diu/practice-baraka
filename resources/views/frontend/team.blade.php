@extends('frontend.layouts.layout')

@section('content')
    @include('frontend.includes.navbar')
    @include('frontend.includes.common-banner')
    <section class="industry-leaders top-half">
        <div class="about-shape1 d-none d-lg-block"></div>
        <div class="container">
            <div class="row gx-60 flex-row-reverse">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <img src="{{ asset('frontend/assets/images/team/tshape.png') }}" alt="image" class="w-100">
                </div>
                <div class="col-lg-6 align-self-center">
                    <span class="sec-subtitle2"> KNOW OUR TEAM LEADERS </span>
                    <h2 class="sec-title"> Join The New Innovation With Technical Workforce </h2>
                    <p class="fs-md fw-medium mb-4 pb-1 pe-lg-5"> Analyzing competing products or services can give you an
                        idea of what already exists in your industry. This can help you find ways to improve your idea. It
                        can also help you target weaknesses </p>
                    <div class="row gx-4 gy-30">
                        <div class="col-xl-11">
                            <div class="about-quote">
                                <div class="about-quote__icon">
                                    <i class="far fa-bell"></i>
                                </div>
                                <p class="about-quote__text"> We Have 25+ Years Of Experience In Giving You Better Quality
                                    Results </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="middle-box">
                                <div class="middle-box__icon">
                                    <img src="{{ asset('frontend/assets/images/team/mi-1-1.png') }}" alt="icon">
                                </div>
                                <h3 class="middle-box__title">Reliable and Proven</h3>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="middle-box">
                                <div class="middle-box__icon">
                                    <img src="{{ asset('frontend/assets/images/team/mi-1-2.png') }}" alt="icon">
                                </div>
                                <h3 class="middle-box__title">Best Team Members</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="member-card-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="member-card-title text-center">
                        <h2 class="sec-title"> Meet Our Team </h2>
                        <p class="fs-md mb-4 mb-xxl-5 pb-1">

                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A ipsam mollitia deserunt magnam
                            aliquid necessitatibus dolore. Id blanditiis a rerum aut, porro aliquid accusamus alias, sed
                            autem reiciendis repudiandae dignissimos.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mx-auto mb-4">
                    <div class="card member-card">
                        <img src="{{ asset('frontend/assets/images/team/p.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Mr. Monoj Das Gupta </h5>
                            <p class="card-text"> Managing Director </p>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mx-auto mb-4">
                    <div class="card member-card">
                        <img src="{{ asset('frontend/assets/images/team/p.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Mr. Monoj Das Gupta </h5>
                            <p class="card-text"> Chief Financial Officer </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mx-auto mb-4">
                    <div class="card member-card">
                        <img src="{{ asset('frontend/assets/images/team/p.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Mr. Monoj Das Gupta </h5>
                            <p class="card-text"> General Manager (HR &amp; Admin) </p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 mx-auto mb-4">
                    <div class="card member-card">
                        <img src="{{ asset('frontend/assets/images/team/p.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> Mr. Monoj Das Gupta </h5>
                            <p class="card-text"> Head of Internal Audit and Compliance </p>
                        </div>
                    </div>
                </div>

           
            </div>
        </div>
    </section>
@endsection
