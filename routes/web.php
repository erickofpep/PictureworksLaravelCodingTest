<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', [UserController::class, 'userview'])->name('user');

Route::post('/postformdata', [UserController::class, 'appendformdata'])->name(
    'postformdata'
);

Route::post('/postjsondata', [UserController::class, 'appendjsondata'])->name(
    'postjsondata'
);
