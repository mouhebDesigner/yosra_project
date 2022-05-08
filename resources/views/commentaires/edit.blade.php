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
                            <a href="#">DETAILS DE FORUM</a>
                            <a href="{{ route('forums.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                Créer
                            </a>
                        </h4>
                        <div class="tz-groups-wraper">
                            <div class="tz-detail-member clearfix">
                                <div class="tz-avatar tz-avatar-groups pull-left">
                                    <a href="#">
                                        @if($forum->user->avatar == null)
                                            <img src="{{ asset('front/icons/avatar.png') }}" alt="Images" title="{{ $forum->user->nom }} {{ $forum->user->prenom }}">
                                        @else 
                                            <img src="{{ asset('storage/'.$forum->user->avatar) }}" alt="Images" title="{{ $forum->user->nom }} {{ $forum->user->prenom }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="tz-info tz-info-groups">
                                    <h5><a href="#">{{ $forum->titre }}</a></h5>
                                    <small>Créé dans: {{ $forum->created_at }}</small>
                                    <p>
                                        {{ $forum->description }}
                                    </p>
                                    <span class="tz-friend">
                                        <a href="#"><i class="fa fa-comment"></i> {{ $forum->commentaires()->count() }} Commentaires</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tz-single-social">
                        <ul class="tz-list-people tz-list-group">
                            
                            @foreach($forum->commentaires()->get() as $comment)
                            <li class="tz-add-event">
                                <div class="tz-avatar">
                                    @if($comment->user->avatar == null)
                                        <img src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                                    @else 
                                        <img src="{{ asset('storage/'.$comment->user->avatar) }}" alt="Images">
                                    @endif
                                </div>
                                <div class="tz-content">
                                    <header style="display: flex; justify-content: space-between; height: 50px">
                                        <a href="#">{{ $comment->user->nom }} {{ $comment->user->prenom }}</a>
                                        @if(Auth::check())
                                            @if($forum->user->id == Auth::id())
                                                <div>
                                                    <a href="{{ route('commentaires.edit', ['commentaire' => $commentaire]) }}">
                                                        <i class="fa fa-edit" style="color: blue"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" data-model="forum" class="delete-confirm" data-url="{{ route('commentaires.destroy', ['commentaire' => $commentaire]) }}" >
                                                        <i class="fa fa-trash" style="color: #95001d"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endif
                                    </header>
                                    <small>{{ $comment->created_at }}</small>
                                    <div class="tz-notice">
                                        <p style="padding: 10px 20px;">
                                            {{ $comment->contenue }}
                                        </p>
                                    </div>
                                    
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <form action="{{ route('commentaires.update', ['commentaire' => $commentaire ]) }}" method="post">
                            @csrf 
                            @method('put')
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="sujet_id" value="{{ $forum->id }}">
                            <textarea name="contenue" id=""  rows="3" class="w-100" placeholder="Commentaire..." style="width: 100%" value="{{ $commentaire->contenue }}">{{ $commentaire->contenue }}</textarea>
                            <div class="controls">
                                <button type="submit" class="login-btn" style="width: 100%; margin-left: 0px"><i class="fa fa-arrows-alt"></i>Publier</button>
                            </div>
                        </form>
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
