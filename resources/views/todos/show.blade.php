@extends('layouts.app')

@section('content')

    <a href="/" class="btn btn-default"> Go Back </a>

    <h1><a href="todo.{{ $todo->id }}">{{ $todo->text }}</a></h1>
    <div class="label label-danger">{{ $todo->due }} <div> 
    <hr>
    <p>{{ $todo->body }}</p>
@endsection