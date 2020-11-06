@extends('layout.default')

@section('title')
    <title>Todo List</title>
@endsection

@section('content')
<div class="flex justify-end border-b pb-4">
    <h1 class="text-2xl px-12">All Todos</h1>
    <a href="#" class="py-2 px-12 text-blue-400 cursor-pointer"><span class="far fa-plus-square" style="font-size:24px" /></a>
</div>
    <ul>
        @foreach ($todos as $todo)
            <li class="flex justify-between p-2">
                <p>{{ $todo->title }}</p>
                <div class="flex">
                    <a href="#" class="py-1 px-2 text-green-400 cursor-pointer"><span class="far fa-edit" style="font-size:24px" /></a>
                    <a href="#" class="py-1 px-2 text-gray-400 cursor-pointer"><span class="far fa-check-circle" style="font-size:24px" /></a>
                    <a href="#" class="py-1 px-2 text-red-400 cursor-pointer"><span class="fas fa-trash-alt px-2" style="font-size:24px" /></a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
