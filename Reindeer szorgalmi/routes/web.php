<?php

use App\Http\Controllers\ReindeerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/reindeers', ReindeerController::class);
