@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="tz-link-widget">
                    <aside class="widget">
                        <form method="get" id="searchform" class="tz-bog-search" action="#">
                            <input type="text" name="s" id="s" placeholder="Search by word">
                            <label class="fa fa-search">&nbsp;</label>
                        </form>
                    </aside>
                    <aside class="widget widget-link">
                        <ul>
                            <li>
                                <a href="{{ route('profile.edit') }}">
                                    <img alt="Images" src="{{ asset('front/demos/check.png') }}">
                                    <i class="fa fa-arrows-alt"></i>
                                    <strong>Editer mon profile</strong>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="tz-joom-profile">
                    <h4 class="joom-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images">MON PROFILE</h4>
                    <div class="tz-profile-me">
                        <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Image"><a href="#">à PROPOS MOI</a>
                        </h5>
                        <p>
                            {{ Auth::user()->description }}
                        </p>
                    
                    </div>
                    <div class="tz-profile-courses">
                        <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Image"><a href="#">FORUMS</a></h5>
                        @foreach(Auth::user()->sujets()->get() as $forum)
                        <div class="tz-groups-wraper">
                            <div class="tz-detail-member clearfix">
                                <div class="tz-avatar tz-avatar-groups pull-left">
                                    <a href="#"><img src="{{ asset('front/icons/avatar.png') }}" alt="Images" title="{{ $forum->user->nom }} {{ $forum->user->prenom }}"></a>
                                </div>
                                <div class="tz-info tz-info-groups">
                                    <div style="display: flex; justify-content: space-between; height: 50px ">

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
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="tz-profile-user">
                    <div class="tz-user-thumbnail">
                        <img src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                        <img src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                    </div>
                    <h5><img src="{{ asset('front/demos/check.png') }}" alt="Images"><a href="#">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</a></h5>
                    <p>Wedding Filmographer Newyork, USA</p>
                    <span class="tz-share-public">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-youtube-play"></i>
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </span>
                    
                </div>
                <div class="tz-profile-image">
                    <h5 class="tz-profile-title"><img src="{{ asset('front/demos/check.png') }}" alt="Images"><a href="#">PHOTOS</a></h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
