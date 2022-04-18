@extends('layouts.app')

@section('content')
<section class="tz-wrapper-default">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tz-link-widget">
                    
                    <aside class="widget widget-link">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}">
                                    <img alt="Images" src="{{ asset('front/demos/check.png')  }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Page de connexion</strong>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <img alt="Images" src="{{ asset('front/demos/check.png')  }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Page d'inscription</strong>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <img alt="Images" src="{{ asset('front/demos/check.png')  }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Mot de passe oublié</strong>
                                </a>
                            </li>
                            
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                <div class="joom-login">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">SE CONNECTER</h4>
                    <form class="joom-form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" name="email" value="">
                                        @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Mot de passe:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="password" name="password" value="">
                                        @error('password')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="controls">
                                    <button type="submit"><i class="fa fa-arrows-alt"></i>Connecter</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <ul class="joom-form-meta">
                                    <li>
                                        @if (Route::has('password.request'))
                                        <a  href="{{ route('password.request') }}">
                                            {{ __('Avez-vous oublié votre mot de passe?') }}
                                        </a>
                                        @endif
                                    </li>
                                    <li><a href="{{ route('register') }}">Vous n'avez pas un compte?</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end class row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
