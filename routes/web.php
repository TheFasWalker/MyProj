<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersIndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventsIndexController;
use App\Http\Controllers\OrganisatorsIndexController;
use App\Http\Controllers\PersonalAreaController;
use App\Http\Controllers\OrgaIndexController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [EventsIndexController::class, 'index'])->name('events');
Route::get('/users', [UsersIndexController::class, 'index'])->name('users');
Route::get('/users/01' , [UserController::class, 'index'])->name('user01');
Route::get('/event/01', [EventController::class, 'index'])->name('event1');
Route::get('/lk', [PersonalAreaController::class, 'index'])->name('lk');
Route::get('/lk/edit', [PersonalAreaController::class, 'edit'])->name('editlk');

Route::get('/organizers', [OrganisatorsIndexController::class, 'index'])->name('organizers');
Route::get('/org/1', [OrgaIndexController::class, 'index'])->name('org01');




