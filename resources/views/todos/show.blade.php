@extends('layouts.app')

@section('content')
    <a class="btn btn-outline-secondary mt-2" href="/">Go Back</a>
    <h1>
        {{$todo->text}}</a>
    </h1>
    <small class="alert alert-danger">{{$todo->due}}</small>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a class="btn btn-outline-secondary" href="/todo/{{$todo->id}}/edit">Edit</a>

    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'float-right']) !!}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
        {{ Form::hidden('_method', 'DELETE') }}
    {!! Form::close() !!}

@endsection
