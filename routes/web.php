<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [UserController::class, 'userview'])->name('user');

Route::post('/appendcomment', [
    UserController::class,
    'appendUserComment',
])->name('appendcomment');
