<?php

use App\Http\Controllers\testController;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// function return using Route

Route::get('/name', function(){
    return response("hello Laravel");

});



// function call Controller

Route::get("/make",[testController::class, 'sun']);

Route::get("/rafi", [testController:: class, "fun"]);


// onek boro url creat kra jabe
Route::get("/hi/this/is", [testController::class, 'funny']);


