<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Welcome to My Laravel App!';
});
Route::get('/blade', function () {
    return view('hello');
});


Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Faiza']);
});
use App\Http\Controllers\PageController;

Route::get('/message', [PageController::class, 'showMessage']);
Route::get('/blade-view', [PageController::class, 'showBlade']);

