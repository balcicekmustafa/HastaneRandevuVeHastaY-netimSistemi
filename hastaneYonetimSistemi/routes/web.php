<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HastaController;

Route::get('/hastalar', [HastaController::class, 'index'])->name('hasta.index');
Route::get('/hastalar/create', [HastaController::class, 'create'])->name('hasta.create');
Route::post('/hastalar', [HastaController::class, 'store'])->name('hasta.store');
