<footer class="tz-footer">
        <div class="tz-footer-content tz-footer-content-2 tz-background-color-4">
            <div class="container">
                <ul class="tz-footer-part">
                    <li>
                        <div class="tz-footer-content-main">
                            <img src="{{ asset('front/demos/Home-02/check-02.png') }}" alt="Images remove footer">
                            <h4>Menu</h4>
                            <ul>
                                <li><a href="{{ url('home') }}">Accueil</a></li>
                                <li><a href="{{ route('events.index') }}">Evenements</a></li>
                                <li><a href="{{ route('formations.index') }}">Formations</a></li>
                                <li><a href="{{ route('actualites.index') }}">Actualités</a></li>
                                <li><a href="{{ route('forums.index') }}">Forum</a></li>
                                <li><a href="{{ route('documents.index') }}">Documents</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="tz-footer-content-main">
                            <img src="{{ asset('front/demos/Home-02/check-02.png') }}" alt="Images remove footer">
                            <h4>EVENEMENTS</h4>
                            <ul>
                                @foreach(App\Models\Event::orderBy('created_at', 'desc')->get()->take(6) as $event)
                                    <li><a href="#">{{ $event->titre }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="tz-footer-content-main">
                            <img src="{{ asset('front/demos/Home-02/check-02.png') }}" alt="Images remove footer">
                            <h4>FORMATIONS</h4>
                            <ul>
                                @foreach(App\Models\Formation::orderBy('created_at', 'desc')->get()->take(6) as $formation)
                                    <li><a href="#">{{ $formation->titre }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="tz-footer-content-main">
                            <img src="{{ asset('front/demos/Home-02/check-02.png') }}" alt="Images remove footer">
                            <h4>ACTUALITES</h4>
                            <ul>
                                @foreach(App\Models\Actualite::orderBy('created_at', 'desc')->get()->take(6) as $actualite)
                                    <li><a href="#">{{ $actualite->titre }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
    </footer>