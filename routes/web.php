<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\GuestMiddleware;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware([GuestMiddleware::class])->group( function (){
    Route::get('/register',[GuestController::class,'RegisterUi'])->name('RegisterPage');
    Route::post('/register', [AutentikasiController::class,'Register'])->name('Register');
    Route::get('/login',[GuestController::class,'LoginUi'])->name('LoginPage');
    Route::post('/login',[AutentikasiController::class,'Login'])->name('Login');
});
Route::middleware([LogMiddleware::class])->group(function (){
    Route::get('/akun-saya', [HomeController::class,'AccountUi'])->name('AccountPage');
});

Route::get('/tentang-kami',[AllController::class,'TentangUi'])->name('AboutusPage');
Route::get('/',[GuestController::class,'HomeUi'])->name('HomePage');
Route::get('/view/{url}',[ViewController::class,'ViewImage'])->name('ViewPage');

Route::post('/upload',[UploadController::class,'upload'])->name('upload');
