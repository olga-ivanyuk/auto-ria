<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdController::class, 'index']);

//Route::get('/ads', [AdController::class, 'index']);
//Route::get('/ads/create',[AdController::class, 'create']);
//Route::get('/ads/{id}',[AdController::class, 'show']);


