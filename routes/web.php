<?php

use Illuminate\Support\Facades\Route;

//Route::get('/',function (){
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);
