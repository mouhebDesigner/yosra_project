@extends('layouts.app')

@section('breadcamp')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="breadcrumb-wrap text-center">
                    <h1>Forum</h1>
                    <p><a href="index-2.html">Home</a><i class="bx bxs-right-arrow-alt"></i>Forums</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="topic-section pt-100 pb-100">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between">
                    <h2 class="topic-table-title">Forums liste</h2>
                    <a href="{{ url('forums/create') }}" class="add-news">Ajouter +</a>
                </div>
                <div class="table-wrapper">
                    <table class="eg-table table recent-topic-table mb-0">
                        <thead>
                            <tr>
                                <th>Topic</th>
                                <th>Replies</th>
                                <th>Views</th>
                                <th>Last Post</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Topic">
                                    <div class="topic-author">
                                        <div class="topic-author-img">
                                            <img src="assets/images/topic/topic4.png" alt="">
                                            <span class="img-bottom-dash"></span>
                                        </div>
                                        <div class="topic-author-content">
                                            <h5><a href="topic-details.html">DocBase Theme Support</a></h5>
                                            <p>Get support for the Docly WordPress theme</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Replies">20</td>
                                <td data-label="Views">2k</td>
                                <td data-label="Last Post">
                                    <div class="topic-last-post">
                                        <span>02 day ago</span>
                                        <div class="last-post-img">
                                            <img src="assets/images/topic/last-post2.png" alt="">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mt-26">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="pagination-wrap text-center">
                            <ul>
                                <li><a href="#"><i class="bi bi-arrow-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#"><i class="bi bi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ps-lg-3">
                <div class="widget-area">

                    <div class="widget-card mb-30">
                        <h5 class="widget-list-title">Forums</h5>
                        <ul class="widget-list-d1 forum-list">
                            <li><a href="#"><span>Ui Design</span><span>05</span></a></li>
                            <li><a href="#"><span>PHP Scripts</span><span>08</span></a></li>
                            <li><a href="#"><span>Envato-hosted </span><span>06</span></a></li>
                            <li><a href="#"><span>Elements</span><span>03</span></a></li>
                            <li><a href="#"><span>User feedback</span><span>07</span></a></li>
                            <li><a href="#"><span>Cкрипт</span><span>03</span></a></li>
                            <li><a href="#"><span>продажи</span><span>06</span></a></li>
                        </ul>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
