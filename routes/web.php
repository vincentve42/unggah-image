<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SearchController;
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
    Route::get('/album-saya', [HomeController::class,'AlbumUi'])->name('AlbumPage');
    Route::get('/followed-saya', [HomeController::class,'FollowedUi'])->name('FollowedUi');
    Route::get('/image/option/{order}',[HomeController::class,'SetOrder'])->name('SetOrder');
    Route::get('/image/delete/{id}',[ImageController::class,'Delete'])->name('DeleteImage');
    Route::get('/search',[SearchController::class,'Search'])->name('Search');
    Route::post('/create-album', [AlbumController::class,'CreateAlbum'])->name('CreateAlbum');
    Route::post('/change-bg', [BackgroundController::class,'ChangeBackground'])->name('ChangeBackground');
});

Route::get('/tentang-kami',[AllController::class,'TentangUi'])->name('AboutusPage');
Route::get('/',[GuestController::class,'HomeUi'])->name('HomePage');
Route::get('/view/{url}',[ViewController::class,'ViewImage'])->name('ViewPage');

Route::post('/upload',[UploadController::class,'upload'])->name('upload');
