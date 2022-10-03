<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//rutas para administradores de central
Route::middleware([])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/prueba', function () {
        return view('admin.prueba.prueba');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
