<?php

use App\Http\Controllers\FrontEnd\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [SiteController::class, 'index'])
        ->name('home');
});

Route::middleware('guest')->group(function () {
    Route::get('info', [SiteController::class, 'info'])
        ->name('info');
});
