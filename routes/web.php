<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Mars-sama']);
});
Route::get('/maincontent', function () {
    return view('main');
});
Route::get('/contact', function () {
    return view('contact', data: ['no' => '087739186892', 'email' => 'hyoudouissei2510@gmail.com']);
});

use App\Http\Controllers\TaskController;
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::patch('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);