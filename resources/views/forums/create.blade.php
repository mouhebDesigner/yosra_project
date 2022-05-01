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
                                    <strong>Créer un nouveau forum</strong>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                <div class="joom-login">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">CREER NOUVEAU FORUM</h4>
                    <form class="joom-form-login" method="POST" action="{{ route('forums.create') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Sujet:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" name="sujet" value="">
                                        @error('sujet')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Description:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="controls">
                                    <button type="submit"><i class="fa fa-arrows-alt"></i>Publier</button>
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
