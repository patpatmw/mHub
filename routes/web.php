<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('allusers',[UsersController::class, 'index'])->name('allusers');
// routes/web.php
Route::get('getuser/detail/{id}',[UsersController::class, 'show'])->name('showuser');
Route::get('edituser/detail/{id}',[UsersController::class, 'edit'])->name('edituser');
Route::put('updateuser/detail/{id}',[UsersController::class, 'update'])->name('updateuser');
Route::delete('deleteuser/detail/{id}',[UsersController::class, 'delete'])->name('deleteuser');

