<header>

    <nav>
        <div class="header-menu-area header-menu-area-design-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-sm-6 col-6">
                        <div class="logo text-left">
                            <a href="index-2.html"><img src="assets/images/logo-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-sm-6 col-6">
                        <a href="javascript:void(0)" class="hidden-lg hamburger">
                            <span class="h-top"></span>
                            <span class="h-middle"></span>
                            <span class="h-bottom"></span>
                        </a>
                        <nav class="main-nav">
                            <div class="logo mobile-ham-logo d-lg-none d-block text-left">
                                <a href="index-2.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                            <ul>
                                <li class="">
                                    <a href="/">Acceuil</a>
                                    
                                </li>
                                <li><a href="{{ url('forums') }}">Forum</a></li>
                                <li class="">
                                    <a href="{{ url('documents') }}">Documents</a>
                                    
                                </li>
                               
                                <li><a href="contact.html">Contactez-nous</a></li>
                            </ul>
                            <div class="menu-btn-wrap d-block d-lg-none">
                                @guest
                                    <a class="common-btn btn-style-1" href="{{ route('login') }}">Connecter</a>
                                @else 

                                        <a class="common-btn btn-style-1" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Déconnecter') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    @if(Auth::user()->role == "etudiant")
                                    <img src="{{ asset('front/assets/images/avatar/student.png') }}" width="50" height="50" alt="">
                                    @else 
                                    <img src="{{ asset('front/assets/images/avatar/teacher.png') }}" width="50" height="50" alt="">

                                    @endif
                                    {{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                                @endif
                            </div>

                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        @guest
                        <div class="menu-btn-wrap">
                            <a class="common-btn btn-style-6" href="{{ route('login') }}">Connecter</a>
                            
                        </div>
                        @else 
                            <div class="menu-btn-wrap">
                                <a class="common-btn btn-style-6" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @if(Auth::user()->role == "etudiant")
                            <img src="{{ asset('front/assets/images/avatar/student.png') }}" width="50" height="50" alt="">
                            @else 
                            <img src="{{ asset('front/assets/images/avatar/teacher.png') }}" width="50" height="50" alt="">

                            @endif
                            {{ Auth::user()->nom }} {{ Auth::user()->prenom }}

                        @endif
                    </div>
                  
                </div>
            </div>
        </div>
    </nav>



    @yield('breadcamp')
    

</header>
