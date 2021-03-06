@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">
    <div class="tz-events-title">
        <img src="{{ asset('front/demos/check.png')}}" alt="Image">
        <h1><a href="#">EVENEMENTS</a></h1>
    </div>
    <div class="container">
        <div class="tz-events-wrapper">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                            <div class="tz-single-ticket">
                                <img src="{{ asset($event->image) }}" alt="Images" style="width: 100%">
                                <h3>
                                    <img src="{{ asset('front/demos/check.png')}}" alt="Images">
                                    BUY TICKET
                                </h3>
                                
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                            <article class="tz-day-open">
                                <h3>
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    {{ $event->titre }}
                                </h3>
                                <span>
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    {{ $event->date }}
                                </span>
                                <p>
                                    {{ $event->description }}
                                </p>
                                
                            </article>
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
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
                                    Derni??re ??v??nement
                                </h3>
                            </li> 
                            @foreach(App\Models\Event::orderBy('created_at', 'desc')->get()->take(3) as $event)
                            <li>
                                <span><img src="{{ asset($event->image) }}" style="width: 60px" alt="Images"></span>
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
