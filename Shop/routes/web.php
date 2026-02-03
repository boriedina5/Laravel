<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function(){
    return view('products.index');// uri: mi megy linkbe, action(){mit érjen el: mappa neve.phpFáljFormátumNélkül}
});
Route::get('/customers', function(){
    return view('customers.index');
});
Route::get('/reviews', function(){
    return view('reviews.index');
});
