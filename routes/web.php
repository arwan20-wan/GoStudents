<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Router::get('/', function () {
//      return view('welcome');
//});       

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

