@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
    <h1>Création dun post</h1>
@stop

@section('content')
<span class="badge badge-primary"></span>
</button>
    <div class="row">
        <div class="col-md-8">
            <div class="box">

                <div class="box-body">

                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="titre">Titre</label>
                      @if($errors->has('titre'))
                      @foreach($errors->get('titre') as $error)
                      <div class="text-danger">{{ $error}}</div>
                      @endforeach
                      @endif
                    <input type="text" name="titre" id="titre" class="form-control {{ $errors->has('titre')?'border-danger':''}}" value="{{old('titre') }}" >
                    </div>
                    <div class="form-group">
                      <label for="contenu">Contenu du post</label>
                      @if($errors->has('contenu'))
                      <div class="text-danger">{{ $errors->first('contenu')}}</div>
                      @endif
                      <textarea class="form-control {{ $errors->has('contenu')?'border-danger':''}}" name="contenu" id="contenu" rows="3">{{old('contenu')}}</textarea>
                    </div>
                    @if($errors->has('image'))
                      <div class="text-danger">{{ $errors->first('image')}}</div>
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
