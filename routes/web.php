<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::multilingual('/', HomeController::class)
    ->name('home');

Route::multilingual('contact', ContactController::class)
    ->name('contact');

Route::multilingual('research', ResearchController::class)
    ->name('research');

Route::multilingual('team', TeamController::class)
    ->name('team');

Route::get('language/{locale}', static function (string $locale) {
    app()->setLocale($locale);

    $previousRouteName = substr(app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName(),3);

    /** @noinspection LaravelUnknownRouteNameInspection */
    return redirect()->route( "$locale.$previousRouteName");
})
    ->name('language.locale');