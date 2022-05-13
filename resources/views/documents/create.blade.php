@extends('layouts.app')

@section('content')
<section class="tz-wrapper-default">
    
    <div class="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="joom-login">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">CREER NOUVEAU FORUM</h4>
                    <form class="joom-form-login" method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <label>Nom document:</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <input type="text" name="titre" value="" placeholder="Saisir nom de document">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                                        @error('titre')
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
                                        <textarea name="description" id="" cols="30" rows="10" placeholder="Saisir description"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

                                        @error('description')
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="controls">
                                    <button type="submit"><i class="fa fa-arrows-alt"></i>Demander</button>
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
