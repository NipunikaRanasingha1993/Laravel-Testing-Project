<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/customers',[CustomerController::class,'index']);