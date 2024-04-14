<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BookController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function (){
    return view('book');
});

Route::get('/book', [BookController::class, 'index']);
