@extends('layouts.app')

@section('content')
    <a class="btn btn-outline-secondary mt-2" href="/todo/{{$todo->id}}">Go Back</a>
    <h1>Edit Todo</h1>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        {{ Form::hidden('_method', 'PUT') }}
    {!! Form::close() !!}
@endsection
