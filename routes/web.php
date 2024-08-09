<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('why',[PublicController::class,'why'])->name('why');
Route::get('team',[PublicController::class,'team'])->name('team');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::post('contact_post',[PublicController::class,'contact_post'])->name('contact_post');
Route::post('subscribe',[PublicController::class,'subscribe'])->name('subscribe');
Route::post('search',[PublicController::class,'search'])->name('search');

Route::get('login',[AdminController::class,'loginForm'])->name('loginForm');
Route::post('login',[AdminController::class,'login'])->name('login');
Route::get('rigister',[AdminController::class,'rigisterForm'])->name('rigisterForm');
Route::post('rigister',[AdminController::class,'rigister'])->name('rigister');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::prefix('contact')->name('contact.')->group(function () {
            Route::get('','contact')->name('');
            Route::get('delete','delete_contact')->name('delete');}
        );
    });
});