<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikePageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/exmaple',function(){
    return "view('example')";
});

Route::get('/bike',function(){
    return view('bike');
});

Route::get('/bike/{id}/{color_id}',[BikePageController::class,'handleRequest']);
