@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
    <h1>Edit dun post</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">

                <div class="box-body">

                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="titre">Titre</label>
                      @if($errors->has('titre'))
                      @foreach($errors->get('titre') as $error)
                      <div class="text-danger"></div>
                      @endforeach
                      @endif
                    <input type="text" name="titre" id="titre" class="form-control " value="" >
                    </div>
                    <div class="form-group">
                      <label for="contenu">Contenu du post</label>
                      @if($errors->has('contenu'))
                      <div class="text-danger"></div>
                      @endif
                      <textarea class="form-control " name="contenu" id="contenu" rows="3"></textarea>
                    </div>
                    @if($errors->has('image'))
                      <div class="text-danger"></div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file" data-bsfileupload>
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">choisissez une image</label>
                              </div>
                    </div>
                    <button type="submit" class="btn btn-info">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
@stop

@push('js')
<script src="{{asset('js/lib/bstrp-change-file-input-value.js')}}"></script>
@endpush
