@extends('frontend.layouts.layout')

@section('content')
@include('frontend.includes.navbar')
@include('frontend.includes.common-banner')

<section class="connectivity-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="connectivity-flex">
                    <div class="left-main">
                        <div class="image-main-shape">
                            <div class="blue-image">
                                <img src="{{ asset('frontend/assets/images/bg/bg-element-01.png') }}" alt="">
                            </div>
                            <div class="main-img">
                                <img src="{{ asset('frontend/assets/images/bg/businesspeople-group-in-coworking-center-coworker-01.jpg') }}"
                                    alt="" class="">
                            </div>
                        </div>
                    </div>
                    <div class="right-main">
                        <div class="title-all">
                            <h3>We help connectivity across the world</h3>
                            <p class="title-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                diam voluptua. At vero eos et accusam et justo</p>
                        </div>
                        <div class="feature-list">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <div class="icon-box"><i class="fa-solid fa-check"></i></div>
                                    Full network visibility worldwide
                                </li>
                                <li class="nav-item">
                                    <div class="icon-box"><i class="fa-solid fa-check"></i></div>
                                    Resilient connectivity in every area
                                </li>
                                <li class="nav-item">
                                    <div class="icon-box"><i class="fa-solid fa-check"></i></div>
                                    Supported the use of fiber optic cable
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what-say-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="what-flex">
                    <div class="left-box">
                        <div class="what-say">
                            <h3>What they say</h3>
                            <div class="quote-main">
                                <div class="quote-flex">
                                    <div class="quote-icon">
                                        <img src="{{ asset('frontend/assets/images/icon/quote.png') }}" alt="">
                                    </div>
                                    <div class="quote-msg">
                                        <div class="msg-box">
                                            <p>“The pace of change and velocity of the product force you to pick up
                                                new skills, experiment with new tactics.“</p>
                                            <div class="title-box">
                                                <h5>Elizabeth Shue </h5>
                                                <p>General Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="blue-bg">
                            <img src="{{ asset('frontend/assets/images/about/yellow-women.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="jobs-card-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="center-padding">
                    <h3>Head start towards choosing right career</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                        ullamcorper mattis, pulvinar dapibus leo.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="job-title">
                            <h3>UX researcher</h3>
                        </div>
                        <div class="post-name">
                            <p>burcharest,romania</p>
                        </div>
                        <div class="job-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullam.</p>
                        </div>
                        <a href="#" class="btn job-apply">apply</a>
                        <a href="#" class="see-details">see details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="amazing-life">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="center-padding">
                    <h3>Amazing life at us</h3>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l1.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l3.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l4.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l5.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="life-box">
                    <img src="{{ asset('frontend/assets/images/blog/l6.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection