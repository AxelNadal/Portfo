@extends('adminlte::page')

@section('title', 'projets')

@section('content_header')
@stop

@section('content')
    <div class="card" style="width: 18rem;">
        <img class="img-fluid" src="{{asset ('theme/img/portfolio/01-thumbnail.jpg')}}" alt="">
      <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@stop