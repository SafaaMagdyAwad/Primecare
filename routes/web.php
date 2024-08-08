<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('why',[PublicController::class,'why'])->name('why');
Route::get('team',[PublicController::class,'team'])->name('team');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
Route::get('contact',[PublicController::class,'contact'])->name('contact');

Route::get('login',[PublicController::class,'login'])->name('login');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::post('contact_post',[PublicController::class,'contact_post'])->name('contact_post');
Route::post('subscribe',[PublicController::class,'subscribe'])->name('subscribe');
Route::post('search',[PublicController::class,'search'])->name('search');