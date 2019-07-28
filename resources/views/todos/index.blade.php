@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach ($todos as $todo)
            <div class="card card-body bg-light mb-2">
                <h3>
                    {{$todo->text}}
                    <span class="alert alert-danger">{{$todo->due}}</span>
                </h3>
            </div>
        @endforeach
    @endif
@endsection

