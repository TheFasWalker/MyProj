<?php

use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LkController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrganisersController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\LocationController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/users', [UsersController::class, 'index'])->name('users');
// Route::get('/lk/edit', [PersonalAreaController::class, 'edit'])->name('editlk');
Route::group(['prefix'=>'organizers'],function (){
    Route::get('/', [OrganisersController::class, 'index'])->name('organizers');
    Route::get('/create', [OrganisersController::class, 'create'])->name('CreateOrganizer');
    Route::post('/', [OrganisersController::class, 'store'])->name('StoreOrganizer');
    Route::get('/{id}', [OrganisersController::class, 'show'])->name('ShowOrganizer');
    Route::get('/{id}/edit', [OrganisersController::class, 'edit'])->name('editOrganizer');
    Route::patch('/{id}', [OrganisersController::class, 'update'])->name('updateOrganizer');
    Route::delete('/{id}', [OrganisersController::class, 'destroy'])->name('deleteOrganizer');
});
Route::group(['prefix'=>'events'],function(){
    Route::get('/',[EventsController::class,'index'])->name('events');
    Route::get('/create',[EventsController::class,'create'])->name('createEvent');
    Route::post('/',[EventsController::class,'store'])->name('StoreEvent');
    Route::get('/{id}',[EventsController::class,'show'])->name('ShowEvent');
    Route::get('/{id}/edit',[EventsController::class,'edit'])->name('EditEvent');
    Route::patch('/{id}',[EventsController::class,'update'])->name('UpdateEvent');
    Route::delete('/{id}',[EventsController::class,'destroy'])->name('DeleteEvent');
});
Route::group(['prefix'=>'mechanics'],function(){
    Route::get('/',[MechanicsController::class,'index'])->name('mechanics');
    Route::get('/create',[MechanicsController::class,'create'])->name('createMechanics');
    Route::post('/',[MechanicsController::class,'store'])->name('StoreMechanics');
    Route::get('/{id}/edit',[MechanicsController::class,'edit'])->name('EditMechanics');
    Route::patch('/{id}',[MechanicsController::class,'update'])->name('UpdateMechanics');
    Route::delete('/{id}',[MechanicsController::class,'destroy'])->name('DeleteMechanics');
});
Route::group(['prefix'=>'locations'],function(){
    Route::get('/',[LocationController::class,'index'])->name('locations');
    Route::get('/create',[LocationController::class,'create'])->name('createLocation');
    Route::post('/',[LocationController::class,'store'])->name('StoreLocation');
    Route::get('/{id}/edit',[LocationController::class,'edit'])->name('EditLocation');
    Route::patch('/{id}',[LocationController::class,'update'])->name('UpdateLocation');
    Route::delete('/{id}',[LocationController::class,'destroy'])->name('DeleteLocation');
});
Route::group(['prefix'=>'lk'],function(){
    Route::get('/',[LkController::class, 'index'])->name('lk');
    Route::get('/edit',[LkController::class, 'edit'])->name('EditLk');
});


Auth::routes();
