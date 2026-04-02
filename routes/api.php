<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::controller(ArticleController::class)->prefix('tasks')->group(function () {
    Route::post('/', 'store');
    Route::get('/', 'show');
    Route::get('/{id}', 'index');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});
