<header class="tz-header tz-header-2">
        
        <div class="tz-customer-container">
            <div class="container-fluid">
                <div class="tz-header-content">
                    <h3 class="tz-logo pull-left">
                        <a href="#"><img alt="Images Logo" src="{{ asset('front/demos/logo-header-2.svg') }}"></a>
                    </h3>
                    <button type="button" class="tz-button-toggle btn-navbar pull-right" data-target=".nav-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <nav class="nav-collapse pull-right">
                        <ul class="tz-menu">
                            <li>
                                @guest 

                                <a href="{{ url('/') }}">Accueil</a>
                                @else
                                <a href="{{ url('home') }}">Accueil</a>

                                @endif
                            </li>
                            <li>
                                <a href="{{ route('events.index') }}">Evenements</a>
                                
                            </li>
                            <li>
                                <a href="{{ route('formations.index') }}">Formations</a>
                                
                            </li>
                            <li>
                                <a href="{{ route('actualites.index') }}">Actualités</a>
                                
                            </li>
                            <li>
                                <a href="{{ route('forums.index') }}">Forum</a>
                                
                            </li>
                            <li class="tz-point-static">
                                <a href="#">Documents</a>
                                
                            </li>
                           
                            
                        </ul>
                        <ul class="tz-menu">
                            @guest 
                                <li class="tz-point-static">
                                    <a href="{{ route('login') }}" class="login-btn">Connecter</a>
                                    
                                </li>
                                <li class="tz-point-static">
                                    <a href="{{ route('register') }}" class="login-btn">S'inscrire</a>
                                </li>

                            @endif
                            
                            @if(Auth::check())
                                <li>
                                    <a href="{{ url('profile') }}" style="padding: 0px 28px;margin-right: 50px;border: none;">
                                            
                                        <img src="{{ asset('front/icons/avatar.png') }}" width="50" height="50" style="border-radius: 50%" alt="">
                                        <span style="color: white">
                                            {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                                        </span>
                                    </a>
                                </li>
                                <li class="tz-point-static">
                                    <a  class="login-btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div><!-- End Content Main Header -->
        </div>
    </header>