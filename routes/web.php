<?php

use App\Http\Controllers\carsController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\eticketcontroller;
use App\Http\Controllers\filtercontroller;
use App\Http\Controllers\indexController;
use App\Http\Controllers\listcarcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\prosessingcontroller;
use App\Http\Controllers\rinciancontroller;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/', [indexcontroller::class,"list"]);
    Route::post('/', function(){return view('listcar');});
});


Route::get('/home', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::prefix('/contact')->group(function(){
    Route::get('/', [contactcontroller::class,"addview"]);
    Route::POST('/', [contactcontroller::class,"addinput"]);

});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::prefix('/cars')->group(function(){
    Route::get("/", [carsController::class,"list"]);
    Route::get('/{id}', [listcarcontroller::class,"details"]);

});
Route::prefix('/list')->group(function(){
    Route::get('/',[listcarcontroller::class,"list"]);
    Route::POST('/',[filtercontroller::class,"penumpang5"]);

});

Route::prefix('/signup')->group(function(){
    Route::get('/', [signupController::class,"addview"]);
    Route::POST('/', [signupController::class,"addinput"]);

});

Route::prefix('/prosesing')->group(function (){
    Route::get('/{id}', [prosessingcontroller::class,"details"]);
});

Route::prefix('/details')->group(function(){
    Route::get('/{id}', [listcarcontroller::class,"details"]);
    Route::POST('/{id}', [indexController::class,"home"]);
});

Route::prefix('/payment')->group(function(){
    Route::POST('/bank/{id}', [paymentcontroller::class,"detailsbank"]);
    Route::POST('/atm/{id}', [paymentcontroller::class,"detailsatm"]);
});

Route::POST('/eticket/{id}', [eticketcontroller::class,"details"]);
