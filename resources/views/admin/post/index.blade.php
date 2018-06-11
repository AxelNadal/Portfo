@extends('adminlte::page')

@section('title', 'posts')

@section('content_header')
    <h1>Ajouter un post</h1>
@stop

@section('content')
    <p>Contenue du post</p>
    <div class="form-group">
      <label for=""></label>
      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
      {{-- ...... --}}
      <label for=""></label>
      <input type="file" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
@stop