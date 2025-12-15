<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/properties', [App\Http\Controllers\PropertyController::class, 'index']);
Route::get('/property/{id}', [App\Http\Controllers\PropertyController::class, 'show']);

// auth k lyee routes
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegister']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

// property management k lyee authenticated routes
Route::middleware('auth')->group(function () {

    Route::get('/properties/create', [App\Http\Controllers\PropertyController::class, 'create']);
    Route::post('/properties', [App\Http\Controllers\PropertyController::class, 'store']);
    Route::get('/properties/{id}/edit', [App\Http\Controllers\PropertyController::class, 'edit']);
    Route::put('/properties/{id}', [App\Http\Controllers\PropertyController::class, 'update']);
    Route::delete('/properties/{id}', [App\Http\Controllers\PropertyController::class, 'destroy']);
});