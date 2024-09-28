<?php

use App\Http\Controllers\CarsAdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/dashboard', [CarsController::class, 'index'])->name('dashboard');

    //admin routing
    Route::get('/admin', [CarsAdminController::class, 'index'])->name('admin.list')->middleware('admin');
    Route::get('/admin_create', [CarsAdminController::class, 'create'])->name('admin.create')->middleware('admin');
    Route::post('/admin_store', [CarsAdminController::class, 'store'])->name('admin.store')->middleware('admin');
    Route::get('/admin/edit/{id}', [CarsAdminController::class, 'edit'])->name('admin.edit')->middleware('admin');
    Route::put('/admin_update/{id}', [CarsAdminController::class, 'update'])->name('admin.update')->middleware('admin');
    Route::delete('/admin_delete/{id}', [CarsAdminController::class, 'destroy'])->name('admin.delete')->middleware('admin');
    Route::delete('/cars/{car}/delete-image/{image}', [CarsAdminController::class, 'deleteImage'])->name('cars.deleteImage');


    //taxi
    Route::get('/taxi', [CarsController::class, 'taxi'])->name('taxi.list');
    Route::get('/taxi/{id}', [CarsController::class, 'showTaxi'])->name('private.show');


    //private
    Route::get('/private', [CarsController::class, 'private'])->name('private.list');
    Route::get('/private/{id}', [CarsController::class, 'showPrivate'])->name('private.show');
    Route::middleware('auth')->group(function () {


    //services
    Route::get('/services', [ServiceController::class, 'index'])->name('services');




    //account
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
