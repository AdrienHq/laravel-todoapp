<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('task.index');
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'created_at' => $request->input('created_at'),
            'slug' => $request->input('title')
        ]);

        return redirect()->route('task.index')->with('success', "Task created");
    }
}
