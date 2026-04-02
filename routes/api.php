<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::apiResource('tasks', ArticleController::class);


