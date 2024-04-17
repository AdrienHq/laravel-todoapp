<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();


        return view('task.index',[
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        $task = new Task();

        return view('task.create', [
            'task' => $task
        ]);
    }

    public function store(CreateTaskRequest $request)
    {
        $task = Task::create($request->validated());

        return redirect()->route('index')->with('success', "Task created");
    }

    public function edit(Task $task)
    {
        return view('task.edit',[
            'task' => $task
        ]);
    }

    public function update(Task $task, CreateTaskRequest $request)
    {
        $task->update($request->validated());

        return redirect()->route('index')->with('success', "Task updated");
    }
}
