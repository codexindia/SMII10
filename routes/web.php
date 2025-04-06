<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


Route::group(['as' => 'user.'], function () {
    Route::get('/', [homeController::class, 'index'])->name('home');
    Route::get('/about', [homeController::class, 'about'])->name('about');
    Route::get('/contact', [homeController::class, 'contact'])->name('contact');
    Route::get('/coming-soon', [homeController::class, 'comingsoon'])->name('comingsoon');
    Route::get('notice',[homeController::class, 'notice'])->name('notice');
    Route::get('faculty',[homeController::class, 'faculty'])->name('faculty');
    Route::get('/courses', [homeController::class, 'courses'])->name('courses');
});
Route::get('test', function () {
    return view('test');
})->name('test');



