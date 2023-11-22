<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RegisterController;

Route::get('/login', function (){ return view('login');})->name('login');
Route::get('/register', function (){ return view('register');})->name('register');

Route::post('/newuser', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
Route::post('/logout', [RegisterController::class, 'logout']);

Route::get('/', [TaskController::class, 'get_all'])->middleware('auth')->name('home');
Route::get('/create', function (){ return view('new');})->middleware('auth');

Route::post('/task', [TaskController::class, 'create_one'])->middleware('auth');

Route::get('/task/{id}', [TaskController::class, 'get_one'])->middleware('auth');
Route::get('/edit/{id}', [TaskController::class, 'edit_one'])->middleware('auth');

Route::put('/task/{id}', [TaskController::class, 'update_one'])->middleware('auth');
Route::delete('/task/{id}', [TaskController::class, 'delete_one'])->middleware('auth');
