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
                                    <a href="{{ route('events.show', ['event' => $event]) }}"><i class="fa fa-arrows-alt"></i></a>
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
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    Derniére évènement
                                </h3>
                            </li> 
                            @foreach(App\Models\Event::orderBy('created_at', 'desc')->get()->take(3) as $event)
                            <li>
                                <span><img src="{{ asset('storage/'.$event->image) }}" style="width: 60px" alt="Images"></span>
                                <div class="tz-post-content">
                                    <h5><a href="#"></a><a href="#">{{ $event->titre }}</a></h5>
                                    <span>{{ $event->date }}</span>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
