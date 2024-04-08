<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('computadores', ComputerController::class);
