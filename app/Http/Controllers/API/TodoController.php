<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Todo::all();
        return $tasks;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tasks = Todo::create($request->all());
        return $tasks;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Todo::findOrFail($id);
        return $tasks;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tasks = Todo::findOrFail($id);
        $tasks->update($request->all());
        return $tasks;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Todo::findOrFail($id);
        $tasks->delete();
        return $tasks;
    }
}
