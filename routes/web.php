<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/tentang-kami',[AllController::class,'TentangUi'])->name('AboutusPage');
Route::get('/',[GuestController::class,'HomeUi'])->name('HomePage');
