<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HastaController;
use App\Http\Controllers\DoktorController;


Route::get('/hasta/create', [HastaController::class, 'create'])->name('hasta.create');
Route::post('/hasta/store', [HastaController::class, 'store'])->name('hasta.store');
Route::get('/hasta/showLoginForm', [HastaController::class, 'showLoginForm'])->name('hasta.login');
Route::post('/hasta/login', [HastaController::class, 'login'])->name('hasta.login.post');
Route::get('/hasta/dashboard', [HastaController::class, 'dashboard'])->name('hasta.dashboard');

Route::get('/doktor/create', [DoktorController::class, 'create'])->name('doktor.create');
Route::post('/doktor/store', [DoktorController::class, 'store'])->name('doktor.store');
Route::get('/doktor/showLoginForm', [DoktorController::class, 'showLoginForm'])->name('doktor.login');
Route::post('/doktor/login', [DoktorController::class, 'login'])->name('doktor.login.post');


Route::get('/doktor/create', [DoktorController::class, 'create'])->name('doktor.create');

Route::get('/hasta/create', [HastaController::class, 'create'])->name('hasta.create');


Route::get('/hasta/login', [HastaController::class, 'loginForm'])->name('hasta.login');


Route::get('/doktor/login', [DoktorController::class, 'loginForm'])->name('doktor.login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
