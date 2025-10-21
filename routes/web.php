<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});