<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretodoRequest;
use App\Http\Requests\UpdatetodoRequest;
use App\Models\Todo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $todos = Todo::paginate(3);
        return view('toDoList',['todos'=>$todos]);
    }

    //create new todo list
    public function create(Request $request)
    {
        //
        $todo = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ], 
        [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required']
        );

        Todo::create($todo);

        $lastPage = Todo::paginate(3)->lastPage();  
        return redirect('/?page='.$lastPage);
    }

    
    public function store(StoretodoRequest $request)
    {
        //
    }

    
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource...
     * might add functionality to edit todo list
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
