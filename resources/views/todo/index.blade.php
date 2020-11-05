@extends('layout.default')

@section('title')
    <title>Todo List</title>
@endsection

@section('content')
<div class="text-center pt-10">
    <h1 class="text-2xl">All Todos</h1>
    <ol>
        @foreach ($todos as $todo)
            <li>{{ $todo->title }}</li>
        @endforeach
    </ol>
</div>
@endsection