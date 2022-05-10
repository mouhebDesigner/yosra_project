@extends('layouts.app')


@section('content')
<section class="tz-banner tz-banner-style2" style="z-index: 1;">
    <!-- Begin class banner style-3 -->
    <div class="tz-banner-style2" style="z-index: 1;">
        <div class="tz-slider-banner owl-carousel owl-theme" style="display: block; opacity: 1;">
            <div class="owl-wrapper-outer">
                <div class="owl-wrapper"
                    style="display: block; width: 10060px; left: 0px; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                    <div class="owl-item active" style="width: 1006px;">
                        <div class="tz-items">
                            <div class="tz-slider-images">
                                <img src="{{ asset('front/demos/Banner/banner-03.jpg') }}" alt="Images">
                            </div>
                            <div class="tz-banner-content" style="top: 262.5px;">
                                <div class="container">
                                    <small>BIENVENUE A NOTRE FORUM</small>
                                    <h4>UNIVERSTIE ISG</h4>
                                    <a class="tz-item-more-details" href="{{ route('register') }}">
                                        <span><i class="fa fa-arrows-alt"></i>REJOIGNEZ-NOUS</span>
                                    </a>
                                </div>
                            </div>
                            <button class="tz-button-left" style="top: 40%;">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="tz-button-right" style="top: 40%;">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1006px;">
                        <div class="tz-items">
                            <div class="tz-slider-images">
                                <img src="{{ asset('front/demos/Banner/banner-01.jpg') }}" alt="Images">
                            </div>
                            <div class="tz-banner-content" style="top: 262.5px;">
                                <div class="container">
                                    <small>NUMBER ONE</small>
                                    <h4>ENGLAND UNIVERSITY</h4>
                                    <span class="tz-under-line"></span>
                                    <h6>We Are The Best Worldwide University</h6>
                                    <a class="tz-item-more-details" href="#">
                                        <span><i class="fa fa-arrows-alt"></i>MORE DETAILS</span>
                                    </a>
                                </div>
                            </div>
                            <button class="tz-button-left" style="top: 40%;">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="tz-button-right" style="top: 40%;">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1006px;">
                        <div class="tz-items">
                            <div class="tz-slider-images">
                                <img src="{{ asset('front/demos/Banner/banner-02.jpg') }}" alt="Images">
                            </div>
                            <div class="tz-banner-content" style="top: 262.5px;">
                                <div class="container">
                                    <small>NUMBER ONE</small>
                                    <h4>ENGLAND UNIVERSITY</h4>
                                    <span class="tz-under-line"></span>
                                    <h6>We Are The Best Worldwide University</h6>
                                    <a class="tz-item-more-details" href="#">
                                        <span><i class="fa fa-arrows-alt"></i>MORE DETAILS</span>
                                    </a>
                                </div>
                            </div>
                            <button class="tz-button-left" style="top: 40%;">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="tz-button-right" style="top: 40%;">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1006px;">
                        <div class="tz-items">
                            <div class="tz-slider-images">
                                <img src="{{ asset('front/demos/Banner/banner-04.jpg') }}" alt="Images">
                            </div>
                            <div class="tz-banner-content" style="top: 262.5px;">
                                <div class="container">
                                    <small>NUMBER ONE</small>
                                    <h4>ENGLAND UNIVERSITY</h4>
                                    <span class="tz-under-line"></span>
                                    <h6>We Are The Best Worldwide University</h6>
                                    <a class="tz-item-more-details" href="#">
                                        <span><i class="fa fa-arrows-alt"></i>MORE DETAILS</span>
                                    </a>
                                </div>
                            </div>
                            <button class="tz-button-left" style="top: 40%;">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="tz-button-right" style="top: 40%;">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="owl-item" style="width: 1006px;">
                        <div class="tz-items">
                            <div class="tz-slider-images">
                                <img src="{{ asset('front/demos/Banner/banner-05.jpg') }}" alt="Images">
                            </div>
                            <div class="tz-banner-content" style="top: 262.5px;">
                                <div class="container">
                                    <small>NUMBER ONE</small>
                                    <h4>ENGLAND UNIVERSITY</h4>
                                    <span class="tz-under-line"></span>
                                    <h6>We Are The Best Worldwide University</h6>
                                    <a class="tz-item-more-details" href="#">
                                        <span><i class="fa fa-arrows-alt"></i>MORE DETAILS</span>
                                    </a>
                                </div>
                            </div>
                            <button class="tz-button-left" style="top: 40%;">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button class="tz-button-right" style="top: 40%;">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- End  class banner style-3 -->
</section>
@include('includes.events')
@endsection
