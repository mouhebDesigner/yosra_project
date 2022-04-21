@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">
    <div class="tz-events-title">
        <img src="{{ asset('front/demos/check.png') }}" alt="Image">
        <h1><a href="#">EVENTS</a></h1>
        <span>Check more about our activities</span>
    </div>
    <div class="container">
        <div class="tz-events-wrapper">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($events as $event)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!--Start tz-events-item -->
                            <div class="tz-events-item">
                                <div class="tz-image">
                                    <img alt="Image" src="{{ asset('storage/'.$event->image) }}">
                                    <a href="#"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                                <div class="tz-description">
                                    <img alt="Images" src="{{ asset('front/demos/Home-02/check-01.png') }}">
                                    <h3><a href="#">{{ $event->titre }}</a></h3>
                                    <strong>{{ $event->date }}</strong>
                                </div>
                            </div>
                            <!--End tz-events-item -->
                        </div>
                        @endforeach

                    </div>
                    <div class="TzPagination tz-pagination-events">
                        <div class="wp-pagenavi">
                            <a href="#" class="previouspostslink"><i class="fa fa-angle-double-left"></i></a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a class="current">3</a>
                            <a href="#" class="nextpostslink"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <aside class="widget">
                        <form method="get" id="searchform" class="tz-bog-search" action="#">
                            <input type="text" name="s" id="s" placeholder="Search by word">
                            <label class="fa fa-search">&nbsp;</label>
                        </form>
                    </aside>
                    <aside class="widget widget-link">
                        <ul>
                            @foreach(App\Models\Categorie::all() as $categorie)
                            <li>
                                <a href="{{ url('categorie/'.$categorie->id.'/events') }}">
                                    <img alt="Images" src="{{ asset('front/demos/check.png')}}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>{{ $categorie->label }}</strong>
                                </a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </aside>
                    <aside class="widget widget-general">
                        <ul>
                            <li>
                                <h3>
                                    <img src="demos/check.png" alt="Images">
                                    LASTEST POSTS
                                </h3>
                            </li>
                            <li>
                                <span><img src="demos/Blog/post-1-blog-1.jpg" alt="Images"></span>
                                <div class="tz-post-content">
                                    <h5><a href="#"></a><a href="#">Responsive Blog</a></h5>
                                    <span>24th Augus 2014</span>
                                </div>
                            </li>
                            <li>
                                <span><img src="demos/Blog/post-2-blog-1.jpg" alt="Images"></span>
                                <div class="tz-post-content">
                                    <h5><a href="#"></a><a href="#">Responsive Blog</a></h5>
                                    <span>24th Augus 2014</span>
                                </div>
                            </li>
                            <li>
                                <span><img src="demos/Blog/post-3-blog-1.jpg" alt="Images"></span>
                                <div class="tz-post-content">
                                    <h5><a href="#"></a><a href="#">Responsive Blog</a></h5>
                                    <span>24th Augus 2014</span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
