<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrganisersController;






Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/events', [EventsIndexController::class, 'index'])->name('events');
Route::get('/users', [UsersController::class, 'index'])->name('users');
// Route::get('/users/01' , [UserController::class, 'index'])->name('user01');
// Route::get('/event/01', [EventController::class, 'index'])->name('event1');
// Route::get('/lk', [PersonalAreaController::class, 'index'])->name('lk');
// Route::get('/lk/edit', [PersonalAreaController::class, 'edit'])->name('editlk');
Route::group(['prefix'=>'organizers'],function (){
    Route::get('/', [OrganisersController::class, 'index'])->name('organizers');
    Route::get('/create', [OrganisersController::class, 'create'])->name('CreateOrganizer');
    Route::post('/', [OrganisersController::class, 'store'])->name('StoreOrganizer');
    Route::get('/{id}', [OrganisersController::class, 'show'])->name('ShowOrganizer');
    Route::get('/{id}/edit', [OrganisersController::class, 'edit'])->name('updateOrganizer');
    Route::patch('/{id}', [OrganisersController::class, 'update'])->name('updateOrganizer');
});

// Route::get('/organizers/1', [OrgaIndexController::class, 'index'])->name('org01');
// Route::get('/organizers/1/edit', [OrgaIndexController::class, 'edit'])->name('org01Edit');


Auth::routes();
