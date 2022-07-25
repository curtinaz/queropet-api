<?php

use App\Http\Controllers\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [DogController::class, 'teste']);
Route::get('/cachorros', [DogController::class, 'index']);

Route::post('/cachorros', [DogController::class, 'create']);
