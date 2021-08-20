<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//contact controller
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact/store', [ContactController::class, 'store']);

//task controller
Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);











//php ^7.4 bisa melakukan arrow function
// Route::get('', fn() => view('home'));
