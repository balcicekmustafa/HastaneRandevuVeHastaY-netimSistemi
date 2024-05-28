<?php

use App\Http\Controllers\HastaController;
use App\Http\Controllers\DoktorController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\ReceteController;
use App\Http\Controllers\RadyolojiRaporController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Hasta Rotaları
Route::resource('hastalar', HastaController::class);

// Doktor Rotaları
Route::resource('doktorlar', DoktorController::class);

// Randevu Rotaları
Route::resource('randevular', RandevuController::class);

// Reçete Rotaları
Route::resource('receteler', ReceteController::class);

// Radyoloji Raporu Rotaları
Route::resource('radyoloji_raporlar', RadyolojiRaporController::class);
