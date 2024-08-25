<?php

use App\Http\Controllers\CarsAdminController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::middleware('auth')->group(function () {

    //admin routing
    Route::get('/admin', [CarsAdminController::class, 'index'])->name('admin.list');
    Route::get('/admin_create', [CarsAdminController::class, 'create'])->name('admin.create');
    Route::post('/admin_store', [CarsAdminController::class, 'store'])->name('admin.store');


    //dashboard
    Route::get('/dashboard', [CarsController::class, 'index'])->name('dashboard');

    //account
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
