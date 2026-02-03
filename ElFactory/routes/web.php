<?php

use App\Http\Controllers\ElfController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ElfController::class, 'index']);
Route::resource('/elves', ElfController::class);