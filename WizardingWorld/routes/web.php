<?php

use App\Http\Controllers\HouseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/houses", HouseController::class);

Route::resource("/students", StudentController::class);

