@extends('admin.layouts.master')

@section('titre', 'Modifier document')
@section('content')
<div class="wrapper">
    @include('admin.includes.header')
    @include('admin.includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            @if($document->user_id)
                <h1>
                    Répondre au document
                </h1>
            @else 
                Modifier un document
            @endif
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.documents.update', ['document' => $document]) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            @if($document->user_id)

                                <div class="card-body" id="inputs">
                                    <div class="form-group">
                                        <label for="file">Fichier <span style="color: red">* </span></label>
                                        <input type="file" class="form-control" name="file" id="file">
                                        @error('file')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="titre">Titre <span style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="titre" value="{{ old('titre') }}"
                                        id="titre" placeholder="Saisir titre ">
                                    @error('titre')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Description
                                        <span style="color: red">* </span>
                                    </label>
                                    <textarea name="description" class="form-control" placeholder="Saisir description"
                                        id="">{{ old('description') }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="card-body" id="inputs">
                                    <div class="form-group">
                                        <label for="file">Fichier <span style="color: red">* </span></label>
                                        <input type="file" class="form-control" name="file" id="file">
                                        @error('file')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-info">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>



    @endsection
    @section('script')


    @endsection
