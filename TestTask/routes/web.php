<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RequestController;
Route::post('/request', [RequestController::class, 'store']);
