<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.welcome');
});
Route::resource('/characters', CharacterController::class);
