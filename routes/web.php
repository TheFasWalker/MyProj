<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersIndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventsIndexController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [EventsIndexController::class, 'index'])->name('events');

Route::get('/users', [UsersIndexController::class, 'index'])->name('users');
Route::get('/user/01' , [UserController::class, 'index'])->name('user01');
