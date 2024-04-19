<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(8);

        $todayTasks = Task::whereDate('created_at', today())->get();


        return view('task.index',[
            'tasks' => $tasks,
            'todayTasks' => $todayTasks
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
