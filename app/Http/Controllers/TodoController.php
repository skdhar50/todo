<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store( TodoCreateRequest $request )
    {
        Todo::create($request->all());

        return redirect()->back()->with('message', 'Todo Created Successfully!');
    }

    public function edit()
    {
        return view('todo.edit');
    }
}
