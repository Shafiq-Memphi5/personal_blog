<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\group;

//navigation routes for guests
Route::get('/', function () {
    return view('welcome');
});
Route::get("/home", function(){
    return view('home');
});

//navigation routes for admins

//Route::domain()