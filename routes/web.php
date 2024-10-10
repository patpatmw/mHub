<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BlogController;

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
Route::get('createblog',[BlogController::class, 'create'])->name('createblog');
Route::get('showblog',[BlogController::class, 'show'])->name('showblog');
Route::post('storeblog',[BlogController::class, 'store'])->name('storeblog');
Route::get('allblogs',[BlogController::class, 'index'])->name('allblogs');

