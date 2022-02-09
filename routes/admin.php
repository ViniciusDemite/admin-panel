<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware(['auth:admin', 'theme:admin-vue'])
    ->group(function () {
        Route::view('/home', 'home')->name('home');
    });
