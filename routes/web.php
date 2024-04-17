<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::get('/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/create', [TaskController::class, 'store']);

//Route::get('/task/create', function () {
//    return view('task.create');
//});
