<?php

use App\Http\Controllers\MishandleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MishandleController::class, 'index']);
Route::post('/comment', [MishandleController::class, 'store']);

Route::post('/comment', [MishandleController::class, 'store'])
    ->middleware('throttle:comment');
