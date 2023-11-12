<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretodoRequest;
use App\Http\Requests\UpdatetodoRequest;
use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $todos = Todo::all();
        return view('toDoList',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $todo = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::create($todo);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretodoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(todo $todo)
    {
        //
        $todo->update(['completed'=>true]);
        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        //
        $todo->delete();
        return redirect('/');
    }
}
