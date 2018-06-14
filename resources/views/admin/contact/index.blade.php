@extends('adminlte::page')

@section('title', 'contacts')

@section('content_header')
@stop

@section('content')
<div class="box box-default">
    <div class="box-header">
        <div>
        </div>
    </div>
    <div class="box-body">
        <table class="table table-light">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Auteurs</th>
                            <th>Adresses</th>
                            <th>Messages</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($email as $emails)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$emails->name}}</td>
                            <td>{{$emails->email}}</td>
                            <td>{{$emails->msg}}</td>
                            <td><a href="{{route('emails.show',['email'=>$emails->id])}}" class="btn btn-info">voir</a></td>
                            @endforeach
                        </tr>
                    </tbody>
            </table>
    </div>
</div>
@stop
