<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/news-feed', function () {
    return view('news-feed');
})->name('news-feed');

// make routes for : cowork, colab, codesk & tools
Route::get('/cowork', function () {
    return view('cowork');
})->name('cowork');

Route::get('/colab', function () {
    return view('colab');
})->name('colab');

Route::get('/codesk', function () {
    return view('codesk');
})->name('codesk');

Route::get('/tools', function () {
    return view('tools');
})->name('tools');