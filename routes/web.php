<?php

use App\Http\Controllers\KaeUsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [KaeUsersController::class, 'showLoginForm']);
Route::post('/login', [KaeUsersController::class, 'login'])->name('login');

Route::get('/great', function () {
    return view('confirmation');
});