<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/portfolio/{id}', [HomeController::class, 'show']);
Route::get('/portfolio/{id}/report', [HomeController::class, 'report'])->name('portfolio.report');