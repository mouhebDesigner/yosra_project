@extends('layouts.app')


@section('content')
<section class="tz-wrapper-default">
    <div class="tz-events-title">
        <img src="{{ asset('front/demos/check.png') }}" alt="Image">
        <h1><a href="#">DOCUMENTS</a></h1>
    </div>
    <div class="container">
        <div class="tz-events-wrapper">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="tz-all-groups">
                        <h4 class="tz-members-title w-100" style="display: flex;justify-content: space-between;">
                            <a href="#">DEMANDE DE DOCUMENTS</a>
                            <a href="{{ route('documents.create') }}" class="login-btn" style="margin-right: 10px; color: white">
                                Demander
                            </a>
                        </h4>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-12">
                    @foreach($documents as $document)
                    <article class="tz-blog-item tz-blog-item-style-1">
                        <div class="tz-blog-description">
                            <h3 style="display: flex; justify-content: space-between;">
                                <span>
                                    <img src="{{ asset('front/demos/check.png') }}" alt="Images">
                                    <a href="#">{{ $document->titre }}</a>
                                </span>
                                @if(Auth::check())
                                    @if($document->user && $document->user->id == Auth::id())
                                        <div>
                                            <a href="{{ route('documents.edit', ['document' => $document]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" data-model="document" class="delete-confirm" data-url="{{ route('documents.destroy', ['document' => $document]) }}" >
                                                <i class="fa fa-trash" style="color: #95001d"></i>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            </h3>
                            @if($document->user_id)
                            <span class="tz-entry-meta">
                                Etat : <a class="tz-author" href="javascript:void(0)">
                                    @if($document->file)
                                        Traité
                                    @else 
                                        Non Traité
                                    @endif
                                </a>
                            </span>
                            @endif
                                
                            <p>
                                {{ $document->description }}
                            </p>
                            @if($document->file)
                            <ul class="tz-blog-more">
                                <li>
                                    <span>
                                        <a class="tz-button-more" href="{{ url('downloads/'.$document->id) }}"><i class="fa fa-arrows-alt"></i>TELECHARGER DOCUMENT</a>
                                    </span>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
