<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', [PageController::class, 'layout']);

Route::get('/contact', [PageController::class, 'contact']);