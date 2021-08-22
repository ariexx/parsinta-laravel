<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//task controller
/*
Menggunakan {{ route('ROUTE_NAME') }} di form tidak membuang waktu karena nama route langsung di panggil
dan jika url diubah maka tidak perlu mengubah "action" di form lagi karena sdh memakai route name jadi tinggal
mengubah di route saja
*/
Route::resource('tasks', TaskController::class);

// Route::resource('users', UserController::class);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');







//php ^7.4 bisa melakukan arrow function
// Route::get('', fn() => view('home'));
