<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
