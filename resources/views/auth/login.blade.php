@extends('layouts.app')

@section('breadcamp')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="breadcrumb-wrap text-center">
                    <h1>Login</h1>
                    <p><a href="index-2.html">Home</a><i class="bx bxs-right-arrow-alt"></i>Login</p>
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
                        <h2>Page de connexion</h2>
                        <p>Nouvel membre? <a href="sign-up.html">S'inscrire ici</a></p>
                    </div>
                    <div class="input-card-box mt-100">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="email" name="email" placeholder="Enter Your Email">
                            @error('email')
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
                            <i class="bi bi-eye field-icon toggle-password"></i>
                            <button type="submit" class="mt-50">Connecter</button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Avez-vous oublié votre mot de passe?') }}
                            </a>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
