<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretodoRequest;
use App\Http\Requests\UpdatetodoRequest;
use App\Models\Todo;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $todos = Todo::paginate(3);
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
        //todo redirect to last page when new item is added
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
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Todo $todo)
    {
        //
        $todo->update(['completed'=> !$todo->completed]);
        return Redirect(url()->previous());
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
        $todo->delete();
        return redirect(url()->previous());
    }
}
