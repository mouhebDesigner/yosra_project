@extends('layouts.app')

@section('breadcamp')
<div class="herobanner-area herobanner-design-2">
    <div class="social-left-area">
        <div class="social-text">
            <p>FollowUs</p>
        </div>
        <ul class="social-icon">
            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
            <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
            <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="hero-content text-center">
                    <h1>Search Anything That Your Need</h1>
                    <p>Search here to get answers to your Questions</p>
                    <div class="hero-form">
                        <form action="https://demo.egenslab.com/html/docbase/index.html" class="form-content">
                            <div class="form-input-area">
                                <input type="text" placeholder="Search Here.....">
                                <select style="display: none;">
                                    <option data-display="All">All</option>
                                    <option value="1">All1</option>
                                    <option value="2">All2</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">All</span>
                                    <ul class="list">
                                        <li data-value="All" data-display="All" class="option selected">All</li>
                                        <li data-value="1" class="option">All1</li>
                                        <li data-value="2" class="option">All2</li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <button>Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="shape hero-img-2" src="assets/images/hero-img-2.png" alt="">
    <img class="shape hero-dot-shape-2" src="assets/images/hero-dot-shape-2.png" alt="">
    <img class="shape hero-top-left-home-2" src="assets/images/hero-shape-top-left-home-2.png" alt="">
    <img class="shape hero-dot-shape-2" src="assets/images/hero-dot-shape-2.png" alt="">
</div>
@endsection
@section('content')

@endsection
