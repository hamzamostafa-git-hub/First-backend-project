<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

public function index()
{
    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
}

public function create()
{
    return view('tasks.create');
}


public function store(Request $request)
{
    $request->validate([
    'title' => 'required|max:255',
]);


    Task::create([
    'title' => $request->title,
]);

return redirect('/tasks');
}


public function edit(Task $task)
{
    return view('tasks.edit', compact ('task'));
}


public function update(Request $request, Task $task)
{
    $task->update($request->only('title'));
    return redirect('/tasks');
}

public function destroy(Task $task) 
  { $task->delete();
    return redirect('/tasks');
  } 


}

