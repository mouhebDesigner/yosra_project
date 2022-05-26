@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title', 'liste de forums')
@section('content')
<div class="wrapper">

    @include('admin.includes.header')
    @include('admin.includes.aside')
    <div class="content-wrapper" style="min-height: 257px">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->

                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                @include('admin.includes.error-message')

                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="m-0">Liste des sujets</h3>
                                            <a href="{{ route('admin.sujets.create') }}" class="add_button" title="ajouter un sujet">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    @foreach($sujets as $sujet)
                                        <div class="col-md-6">
                                            <div class="card card-widget">
                                                <div class="card-header d-flex justify-content-between">
                                                    <div class="user-block">
                                                        @if($sujet->user->avatar == null)
                                                            <img class="img-circle" src="{{ asset('front/icons/avatar.png') }}" alt="Images" title="{{ $sujet->user->nom }} {{ $sujet->user->prenom }}">
                                                        @else 
                                                            <img class="img-circle" src="{{ asset('storage/'.$sujet->user->avatar) }}" alt="Images" title="{{ $sujet->user->nom }} {{ $forum->user->prenom }}">
                                                        @endif
                                                       
                                                        <span class="username">{{ $sujet->user->nom }} {{ $sujet->user->prenom }}</span>
                                                        <span class="description">Créé dans: {{ $sujet->created_at }}</span>
                                                    </div>
                                                    @if(Auth::id() == $sujet->user_id)
                                                        <a href="{{ route('admin.sujets.edit', ['sujet' => $sujet]) }}">
                                                            <i class="fa fa-pen"></i>
                                                        </a>
                                                        <button type="submit" class="btn-delete delete-confirm" data-model="sujet" data-url="{{ route('admin.sujets.destroy', ['sujet' => $sujet]) }}" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    @endif

                                                    

                                                </div>

                                                <div class="card-body">

                                                    <p>
                                                        {{ $sujet->description }}
                                                    </p>
                                                    <span class="float-right text-muted">{{ $sujet->commentaires()->count() }} comments</span>
                                                </div>

                                                <div class="card-footer card-comments">
                                                    @foreach($sujet->commentaires()->get() as $comment)
                                                    <div class="card-comment">

                                                        
                                                            @if($comment->user->avatar == null)
                                                                <img  class="img-circle img-sm" src="{{ asset('front/icons/avatar.png') }}" alt="Images">
                                                            @else 
                                                                <img class="img-circle img-sm" src="{{ asset('storage/'.$comment->user->avatar) }}" alt="Images">
                                                            @endif
                                                        <div class="comment-text">
                                                            <span class="username">
                                                                {{$comment->user->nom}}
                                                                {{$comment->user->prenom}}
                                                                <span class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                                                            </span>
                                                            {{ $comment->contenue }}
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                    

                                                </div>

                                                <div class="card-footer">
                                                    <form action="{{ route('commentaires.store') }}" method="post">
                                                        @csrf 
                                                        <img class="img-fluid img-circle img-sm"
                                                            src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" alt="Alt Text">

                                                        <div class="img-push">
                                                            
                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                                <input type="hidden" name="sujet_id" value="{{ $sujet->id }}">
                                                                <div class="controls d-flex justify-content-between">
                                                                    <input  name="contenue" type="text" class="form-control form-control-sm"
                                                                     placeholder="Ajouter commentaire">
                                                                    <button type="submit" class="login-btn w-25" style="width: 100%; margin-left: 0px"><i class="fa fa-arrows-alt"></i>Ajouter</button>
                                                                </div>
                                                           
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    @endsection
