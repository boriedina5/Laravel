<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/cats', function(){//2 param: azonosító, 
    echo "Itt az összes szisza";
})->name("cats.index");//útvonal elnevezése

Route::get('/macskák', [CatController::class, "index"]);*/

Route::resource('/cats', CatController::class);//összes útvonlat bejegyzi
