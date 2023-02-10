@extends('frontend.layouts.layout')

@section('content')
@include('frontend.includes.navbar')
@include('frontend.includes.common-banner')
<section class="news-content-main news-content-details">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="news-post-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptates quod quia architecto
                        excepturi in eaque amet illum distinctio adipisci voluptas inventore sequi suscipit aspernatur
                        ipsam est rerum, maiores eveniet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptates quod quia architecto
                        excepturi in eaque amet illum distinctio adipisci voluptas inventore sequi suscipit aspernatur
                        ipsam est rerum, maiores eveniet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus voluptates quod quia architecto
                        excepturi in eaque amet illum distinctio adipisci voluptas inventore sequi suscipit aspernatur
                        ipsam est rerum, maiores eveniet.</p>
                </div>
                <div class="new-mission-box">
                    <div class="single-box shadow-sm">
                        <div class="icon-box">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>
                        <div class="content">
                            <h4>mission</h4>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae quas est quam
                                a
                                architecto sapiente aut facilis blanditiis! Ad hic consequuntur vitae, est voluptatum
                                exercitationem vero distinctio. Et, repellendus.
                            </p>
                        </div>
                    </div>
                    <div class="single-box shadow-sm">
                        <div class="icon-box">
                          
                            <img src="{{ asset('frontend/assets/images/icon/vision.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>vission</h4>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae quas est quam
                                a
                                architecto sapiente aut facilis blanditiis! Ad hic consequuntur vitae, est voluptatum
                                exercitationem vero distinctio. Et, repellendus.
                            </p>
                        </div>
                    </div>
                    <div class="single-box shadow-sm">
                        <div class="icon-box">
                            <img src="{{ asset('frontend/assets/images/icon/fight-spirit.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <h4>our strength</h4>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae quas est quam
                                a
                                architecto sapiente aut facilis blanditiis! Ad hic consequuntur vitae, est voluptatum
                                exercitationem vero distinctio. Et, repellendus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="news-post-text">
                    <img src="{{ asset('frontend/assets/images/mission/mission.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection