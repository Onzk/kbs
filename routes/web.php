<?php

use App\Http\Controllers\public\AppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AppController::class)->name('public.')->prefix('/')->group(
    function () {
        Route::get('/', 'index')->name('index');
    }
);
