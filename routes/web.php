<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'test';
});

Route::get('/test2', function () {
    return 'test2';
});
Route::get('/test3',function (){
    return 'test3';
});