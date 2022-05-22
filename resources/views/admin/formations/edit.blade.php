@extends('admin.layouts.master')

@section('titre', 'Modifier une formation')
@section('content')
<div class="wrapper">
    @include('admin.includes.header')
    @include('admin.includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modifier une formation
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
                        <form action="{{ route('admin.formations.update', ['formation' => $formation]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body" id="inputs">
                                <div class="form-group">
                                    <label for="titre">Titre <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="titre" value="{{ $formation->titre }}" id="titre"
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
                                            <option value="{{ $categorie->id }}" @if($categorie->id == $formation->categorie_id) selected @endif>{{ $categorie->label }}</option>
                                        @endforeach
                                        <option value="<?= null ?>"  @if(($formation->categorie_label) || ($errors->has('categorie_id')  &&  old('categorie_id') == null)) selected @endif>Autre</option>
                                    </select>
                                    @error('categorie')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                @if($errors->has('categorie'))
                                    <div class="form-group categorie_div">
                                        <label for="categorie_label">Catégorie <span style="color: red">* </span> </label>
                                        <input type="text" class="form-control" name="categorie_label" value="{{ old("categorie_label") }}" id="categorie_label" placeholder="Saisir categorie">
                                        @error("categorie_label")
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endif
                                @if($formation->categorie_label)
                                    <div class="form-group categorie_div">
                                        <label for="categorie_label">Catégorie <span style="color: red">* </span> </label>
                                        <input type="text" class="form-control" name="categorie_label" value="{{ $formation->categorie_label }}" id="categorie_label" placeholder="Saisir categorie">
                                        @error("categorie_label")
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="email">Description  
                                        <span style="color: red">* </span>
                                    </label>
                                    <textarea name="description" class="form-control" placeholder="Saisir description" id="" >{{ $formation->description }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="date">Date de formation  <span
                                            style="color: red">* </span></label>
                                    <input type="date"  value="{{ $formation->date }}" class="form-control" name="date"
                                        id="date">
                                    @error('date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="time">Heure<span
                                            style="color: red">* </span></label>
                                    <input type="time" value="{{ $formation->time }}" class="form-control" name="time"
                                        id="time">
                                    @error('time')
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
        <script>
            $(document).ready(function(){
                $("#categorie_id").on('change', function(){
                    if($(this).val() == ""){
                        $(this).after('<div class="form-group categorie_div">'+
                                    '<label for="categorie_label">Catégorie <span style="color: red">* </span> </label>'+
                                    '<input type="text" class="form-control" name="categorie_label" value="{{ old("categorie_label") }}" id="categorie_label" placeholder="Saisir categorie">'+
                                    '@error("categorie_label")'+
                                    '<p class="text-danger">{{ $message }}</p>'+
                                    '@enderror'+
                                '</div>');
                    } else {
                        if($(".categorie_div").closest("html").length == 1){
                            $(".categorie_div").remove();
                        }
                    }
                });
            });
        </script>

    @endsection
