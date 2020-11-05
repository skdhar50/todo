<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
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
