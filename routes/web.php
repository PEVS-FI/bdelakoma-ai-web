<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::multilingual('/', HomeController::class)
    ->name('home');