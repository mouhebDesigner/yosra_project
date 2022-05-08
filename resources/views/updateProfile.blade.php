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
                                <a href="{{ url('profile') }}">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Mon profile</strong>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                <div class="joom-login">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">SE CONNECTER</h4>
                    <form class="joom-form-login" method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Nom:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" value="{{ Auth::user()->nom }}" name="nom"  class="" placeholder="Saisir votre nom">
                                        <br>
                                        @error('nom')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Prénom:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" value="{{ Auth::user()->prenom }}" name="prenom"  class="" placeholder="Saisir votre prenom">
                                        <br>
                                        @error('prenom')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Email:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" value="{{ Auth::user()->email }}" name="email" value="" placeholder="Saisir email">
                                        <br>
                                        @error('email')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Téléphone:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="number" value="{{ Auth::user()->numtel }}" name="numtel"  class="" placeholder="Saisir votre numtel">
                                        <br>
                                        @error('numtel')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Date de naissance:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="date" value="{{ Auth::user()->date_naissance }}" name="date_naissance"  class="" placeholder="Saisir votre prenom">
                                        <br>
                                        @error('date_naissance')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>à propos:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <textarea name="description" id="" cols="30" rows="10" placeholder="Saisir description">{{ Auth::user()->description }}</textarea>
                                        <br>
                                        @error('date_naissance')
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
                                        <input type="password" value="" name="password" value="" placeholder="Saisir mot de passe">
                                        <br>
                                        @error('password')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Confirmer mot de passe:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input id="password-field" value="" name="password_confirmation" type="password" class="" placeholder="Confirmer le mot de passe">
                                       
                                    </div>
                                </div>
                               
                                <div class="controls">
                                    <button type="submit"><i class="fa fa-arrows-alt"></i>Envoyer</button>
                                </div>
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
