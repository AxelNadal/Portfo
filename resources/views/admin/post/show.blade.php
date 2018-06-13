@extends('adminlte::page')

@section('title', 'Post')

@section('content_header')
    <h1>Post unique</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h1>{{$post->titre}}</h1>
                </div>
                <div class="box-body">
                <p><img class="img-fluid" src="{{Storage::disk('imagePost-thumb')->url($post->image)}}" alt=""></p>
                    <p>{{$post->contenu}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-header"><h3>Action</h3></div>
                <div class="box-body">
                    @can('update',$post)
                    <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-warning text-white">@lang('general.edit')</a>
                    @endcan
                    @can('delete',$post)
                    <form  class="d-inline" action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">@lang('general.delete')</button>
                    </form>
                    @endcan
                </div>
            </div>
        </div>

    </div>
@stop
