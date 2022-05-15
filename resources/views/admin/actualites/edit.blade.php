@extends('admin.layouts.master')

@section('titre', 'Modifier actualité')
@section('content')
<div class="wrapper">
    @include('admin.includes.header')
    @include('admin.includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modifier un actualité
            </h1>
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
                        <form action="{{ route('admin.actualites.update', ['actualite' => $actualite]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body" id="inputs">
                                <div class="form-group">
                                    <label for="titre">Titre <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="titre" value="{{ $actualite->titre }}" id="titre"
                                        placeholder="Saisir titre ">
                                    @error('titre')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="categorie">Catégorie <span
                                            style="color: red">* </span> </label>
                                    <select class="form-control" name="categorie_id" id="categorie_id">
                                        <option value="" disabled selected>Choisir un catégorie</option>
                                        @foreach(App\Models\Categorie::all() as $categorie)
                                            <option value="{{ $categorie->id }}" @if($categorie->id == $actualite->categorie_id) selected @endif>{{ $categorie->id }}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Description  
                                        <span style="color: red">* </span>
                                    </label>
                                    <textarea name="description" class="form-control" placeholder="Saisir description" id="" >{{ $actualite->description }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="image">Images  <span
                                            style="color: red">* </span></label>
                                    <input type="file" class="form-control" name="image"
                                        id="image">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                               
                            </div>
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
