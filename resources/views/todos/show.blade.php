@extends('layouts.app')

@section('content')
    <a class="btn btn-outline-secondary mt-2" href="/">Go Back</a>
    <h1>
        {{$todo->text}}</a>
    </h1>
    <small class="alert alert-danger">{{$todo->due}}</small>
    <hr>
    <p>{{$todo->body}}</p>
@endsection
