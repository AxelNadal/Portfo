@extends('adminlte::page')

@section('title', 'Email')

@section('content_header')
    <h1>Mails unique</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h1>{{$emails->name}}</h1>
                </div>
                <div class="box-body">
                    <p>{{$email->msg}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-header"><h3>Action</h3></div>
                <div class="box-body">
                    @can('update',$email)
                    <a href="{{route('email.edit',['email'=>$email->id])}}" class="btn btn-warning text-white">@lang('general.edit')</a>
                    @endcan
                    @can('delete',$email)
                    <form  class="d-inline" action="{{route('email.destroy', ['email' => $email->id])}}">
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
