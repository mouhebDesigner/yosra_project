@extends('layouts.app')

@section('breadcamp')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="breadcrumb-wrap text-center">
                    <h1>Forum</h1>
                    <p><a href="index-2.html">Home</a><i class="bx bxs-right-arrow-alt"></i>Forums</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<section class="tz-groups">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                    <div class="tz-all-groups">
                        <h4 class="tz-members-title w-100" style="display: flex;justify-content: space-between;">
                            <a href="#">VOIR TOUT LES FORUMS</a>
                            <a href="{{ route('forums.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                Créer
                            </a>
                        </h4>
                        
                        @foreach($forums as $forum)
                        <div class="tz-groups-wraper">
                            <div class="tz-detail-member clearfix">
                                <div class="tz-avatar tz-avatar-groups pull-left">
                                    <a href="#"><img src="{{ asset('front/icons/avatar.png') }}" alt="Images" title="{{ $forum->user->nom }} {{ $forum->user->prenom }}"></a>
                                </div>
                                <div class="tz-info tz-info-groups">
                                    <h5><a href="{{ route('forums.show', ['forum' => $forum]) }}">{{ $forum->titre }}</a></h5>
                                    <small>Créé dans: {{ $forum->created_at }}</small>
                                    <p>
                                        {{ $forum->description }}
                                    </p>
                                    <span class="tz-friend">
                                        <a href="#"><i class="fa fa-comment"></i> 0 Commentaires</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                  
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                   
                    <aside class="widget widget-link">
                        <ul>
                            @foreach(App\Models\Categorie::all() as $categorie)
                            <li>
                                <a href="{{ url('categorie/'.$categorie->id.'/forums') }}">
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>{{ $categorie->label }}</strong>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </aside>
                    
                    
                </div>
            </div>
        </div>
    </section>
@endsection
