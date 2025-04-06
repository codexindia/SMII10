<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\NoticeController;

Route::group(['as' => 'admin.', 'prefix' => 'adminSM'], function () {
    Route::get('/login', [adminController::class, 'login'])->name('login');
    Route::post('/login', [adminController::class, 'loginSubmit'])->name('login.submit');


    Route::group([], function () {
        Route::get('/dashboard', [adminController::class, 'dashboard'])->name('dashboard');
        Route::controller(NoticeController::class)->group(function () {
            Route::get('/notice', 'index')->name('notice.index');
            Route::get('/notice/create', 'create')->name('notice.create');
            Route::post('/notice/store', 'store')->name('notice.store');
            Route::get('/notice/{action}/{id}', 'edit')->name('notice.action');
           
        });
    });
});
