@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">
    <div class="tz-events-title">
        <img src="{{ asset('front/demos/check.png') }}" alt="Image">
        <h1><a href="#">ACTUALITES</a></h1>
        <span>Check more about our activities</span>
    </div>
    <div class="container">
        <div class="tz-events-wrapper">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($actualites as $actualite)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <!--Start tz-events-item -->
                            <div class="tz-events-item">
                                <div class="tz-image">
                                    <img alt="Image" src="{{ asset($actualite->image) }}">
                                    <a href="{{ route('actualites.show', ['actualite' => $actualite]) }}"><i class="fa fa-arrows-alt"></i></a>
                                </div>
                                <div class="tz-description">
                                    <img alt="Images" src="{{ asset('front/demos/Home-02/check-01.png') }}">
                                    <h3><a href="{{ route('actualites.show', ['actualite' => $actualite]) }}">{{ $actualite->titre }}</a></h3>
                                    <strong>{{ $actualite->date }}</strong>
                                </div>
                            </div>
                            <!--End tz-events-item -->
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    
                    <aside class="widget widget-link">
                        <ul>
                            @foreach(App\Models\Categorie::all() as $categorie)
                            <li>
                                <a href="{{ url('categorie/'.$categorie->id.'/actualites') }}">
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
                                    Derni??re actualit??
                                </h3>
                            </li> 
                            @foreach(App\Models\Actualite::orderBy('created_at', 'desc')->get()->take(3) as $actualite)
                            <li>
                                <span><img src="{{ asset('storage/'.$actualite->image) }}" style="width: 60px" alt="Images"></span>
                                <div class="tz-post-content">
                                    <h5><a href="#"></a><a href="#">{{ $actualite->titre }}</a></h5>
                                    <span>{{ $actualite->date }}</span>
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
