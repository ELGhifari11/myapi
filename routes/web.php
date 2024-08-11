<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerTimeController;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', [PrayerTimeController::class, 'showPrayerTimes']);
