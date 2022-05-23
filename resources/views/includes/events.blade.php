<section class="tz-lastest-event">
    <span class="tz-images-check"><img src="{{ asset('front/demos/Home-02/check-01.png')}}" alt="Images"></span>
    <h3 class="tz-title-event tz-title-event-2">DERNIERE EVENEMENTS</h3>
    <div class="container">
        
        <div class="tz-event-container">
            <div class="row">

            @foreach(App\Models\Event::orderBy('created_at', 'desc')->get() as $event)
            <div class="col-md-4">

                <div class="owl-item" style="width: 300px;">
                    <div class="tz-event-content">
                        <div class="tz-image-event-item">
                            <img src="{{ asset($event->image) }}" alt="Image">
                            <a href="{{ route('events.show', ['event' => $event]) }}"><i class="fa fa-arrows-alt"></i></a>
                        </div>
                        <img src="{{ asset('front/demos/Home-02/check-01.png')}}" alt="Images">
                        <h6>{{ $event->titre }}</h6>
                        <strong>{{ $event->date }}</strong>
                    </div>
                </div>
            </div>
            @endforeach
            </div>

        </div>
    </div><!-- End container class tz-lastest-event -->
</section>
