@extends('layouts.app')

@section('breadcamp')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="breadcrumb-wrap text-center">
                    <h1>Inscription</h1>
                    <p><a href="index-2.html">Home</a><i class="bx bxs-right-arrow-alt"></i>Inscription</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="sign-up mt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                <div class="input-card-wrap input-card-wrap-design-2 text-center ">
                    <div class="input-card-title">
                        <h2>Page d'Inscription</h2>
                        <p>J'ai dèja un compte? <a href="sign-up.html">S'inscrire ici</a></p>
                    </div>
                    <div class="input-card-box mt-100">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="text" name="nom" placeholder="Saisir votre nom">
                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="text" name="prenom" placeholder="Saisir votre prenom">
                            @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            
                            <input type="email" name="email" placeholder="Enter Your Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="date" name="date_naissance" placeholder="Saisir votre prenom">
                            @error('date_naissance')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          
                            <input id="password-field" name="password" type="password" class="form-control-pass"
                                name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="password-field" name="password_confirmation" type="password" class="form-control-pass"
                                name="password" placeholder="Password">
                           
                            <i class="bi bi-eye field-icon toggle-password"></i>
                            <button type="submit" class="mt-50">Envoyer</button>
                         
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
