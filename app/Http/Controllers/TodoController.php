<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    protected $task;

    public function __construct()
    {
        $this->task = new Todo;
    }
    public function index()
    {
        $response['tasks'] = $this->task->all();
        return view('pages.todo.index')->with($response);
    }
    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->back()->with('message', 'Task Add Succefully');
    }

    public function done($task_id)
    {
        $task = $this->task->findOrFail($task_id);
        $task->done = 1;
        $task->update();
        return redirect()->back()->with('message', 'Task has Been Update Successfully');
    }

    public function delete($task_id)
    {
        $task = $this->task->findOrFail($task_id);
        $task->delete();
        return redirect()->back()->with('message', 'Task has Been Deleted');
    }
}
