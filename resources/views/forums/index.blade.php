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
                            @guest 
                                <a href="{{ route('forums.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                    Créer
                                </a>
                            @else 

                                @if(Auth::user()->isStudent())
                                <a href="{{ route('forums.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                    Créer
                                </a>
                                @endif
                            @endif
                        </h4>
                        
                        @foreach($forums as $forum)
                        <div class="tz-groups-wraper">
                            <div class="tz-detail-member clearfix">
                                <div class="tz-avatar tz-avatar-groups pull-left">
                                    <a href="#"><img src="{{ asset('front/icons/avatar.png') }}" alt="Images" title="{{ $forum->user->nom }} {{ $forum->user->prenom }}"></a>
                                </div>
                                <div class="tz-info tz-info-groups">
                                    <div style="display: flex; justify-content: space-between; ">

                                        <h5><a href="{{ route('forums.show', ['forum' => $forum]) }}">{{ $forum->titre }}</a></h5>
                                        
                                        @if(Auth::check())
                                            @if($forum->user->id == Auth::id())
                                                <div>
                                                    <a href="{{ route('forums.edit', ['forum' => $forum]) }}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-model="forum" class="delete-confirm" data-url="{{ route('forums.destroy', ['forum' => $forum]) }}" >
                                                        <i class="fa fa-trash" style="color: #95001d"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
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
                   <aside class="widget">
                        <form action="{{ route('forum.search') }}" class="tz-bog-search tz-social-search" id="searchform" method="get">
                            <div style="display: flex; width: 100%">
                                <div>
                                    <input type="text" name="search" placeholder="Chercher un forum">
                                </div>
                                <button type="submit" style="width: 50px">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </aside>
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
