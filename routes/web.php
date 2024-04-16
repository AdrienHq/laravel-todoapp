<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\TaskController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\TaskController::class, 'create']);
Route::post('/create', [\App\Http\Controllers\TaskController::class, 'store']);

//Route::get('/task/create', function () {
//    return view('task.create');
//});
