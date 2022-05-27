<?php

use App\Http\Controllers\Frontend\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])
    ->name('home');

Route::get('info', [SiteController::class, 'info'])
    ->name('info');