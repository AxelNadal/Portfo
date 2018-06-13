@extends('adminlte::page')

@section('title', 'posts')

@section('content_header')
<div class="container">

    <h1>List des posts</h1>
</div>
@stop

@section('content')
<div class="container">
            <a href="{{route('posts.create')}}" class="btn btn-warning m-3">Nouveau Post</a>
        
    <div class="row">
            <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/wizard.png" alt="Card image cap">
                            <div class="card-body">
                              <h2 class="card-title">Card title</h2>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                              <a href="#" class="btn btn-success">Edit</a>
                              <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
            </div>
            <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/goblin.png" alt="Card image cap">
                            <div class="card-body">
                              <h2 class="card-title">Card title</h2>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                              <a href="#" class="btn btn-success">Edit</a>
                              <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
            </div>
            <div class="col-sm-4">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/giant.png" alt="Card image cap">
                            <div class="card-body">
                              <h2 class="card-title">Card title</h2>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                              <a href="#" class="btn btn-success">Edit</a>
                              <a href="#" class="btn btn-danger">Delete</a> 
                            </div>
                          </div>
            </div>
    </div>
</div>
@stop