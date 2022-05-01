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
<section class="tz-groups">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                    <div class="tz-all-groups">
                        <h4 class="tz-members-title w-100" style="display: flex;justify-content: space-between;">
                            <a href="#">VOIR TOUT LES FORUMS</a>
                            <a href="{{ route('forums.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                Créer
                            </a>
                        </h4>
                        <div class="tz-filter-member clearfix">
                            <ul class="tz-option pull-left">
                                <li class="filter active">
                                    <a href="#">LATEST</a>
                                </li>
                                <li class="filter">
                                    <a href="#">ONLINE</a>
                                </li>
                                <li class="filter">
                                    <a href="#">ALPHABETICAL</a>
                                </li>
                            </ul>
                            <ul class="tz-character pull-right">
                                <li class="filter">
                                    <a href="#">ALL GROUP</a>
                                </li>
                                <li class="filter">
                                    <a href="#">SEARCH</a>
                                </li>
                            </ul>
                        </div>
                            <div class="tz-groups-wraper">
                                <div class="tz-detail-member clearfix">
                                    <div class="tz-avatar tz-avatar-groups pull-left">
                                        <a href="#"><img src="{{ asset('front/demos/Social/images') }}-1-Social-5.jpg" alt="Images"></a>
                                    </div>
                                    <div class="tz-info tz-info-groups">
                                        <h5><a href="#">HOPKINS CYCLING</a></h5>
                                        <small>Created on: Tuesday, 03 June 2014</small>
                                        <p>Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet,...</p>
                                        <span class="tz-friend">
                                            <a href="#"><i class="fa fa-users"></i> 1 Member </a>
                                            <a href="#"><i class="fa fa-comment"></i> 0 Discussions</a>
                                            <a href="#"><i class="fa fa-pencil"></i> 0 Wall Posts</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                        </div>
                    <div class="load-more">
                        <a href="#"><i class="fa fa-arrows-alt"></i>LOADING MORE</a>
                    </div>
                    </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                    <aside class="widget">
                        <form action="#" class="tz-bog-search tz-social-search" id="searchform" method="get">
                            <input type="text" placeholder="Search by word">
                            <label class="fa fa-search">&nbsp;</label>
                        </form>
                    </aside>
                    <aside class="widget widget-link">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Home</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Activity</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Member</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Single Member</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Groups</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Single groups</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Member Login</strong>
                                </a>
                            </li>
                        </ul>
                    </aside>
                    
                    
                </div>
            </div>
        </div>
    </section>
@endsection
