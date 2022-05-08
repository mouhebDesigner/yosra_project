@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">
    <div class="tz-events-title">
        <img src="{{ asset('front/demos/check.png') }}" alt="Image">
        <h1><a href="#">DOCUMENTS</a></h1>
    </div>
    <div class="container">
        <div class="tz-events-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                </div>
               
            </div>
        </div>
    </div>
</section>
@endsection
