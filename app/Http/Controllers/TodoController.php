<?php

namespace App\Http\Controllers;

use domain\Facades\TodoFacade;
use Illuminate\Http\Request;

class TodoController extends ParentController
{
    public function index()
    {
        $response['tasks'] = TodoFacade::all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request)
    {
        TodoFacade::store($request->all());
        return redirect()->back()->with('message', 'Todo List Created Successfully');
    }

    public function done($task)
    {
        TodoFacade::done($task);
        return redirect()->back()->with('message', 'Todo List has benn Updated');
    }

    public function delete(int $task_id)
    {
        TodoFacade::delete($task_id);
        return redirect()->back()->with('message', 'Todo List Deleted');
    }
}
