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
    return view('home.index');
})->name('home');


Route::get('/news-feed', function () {
    return view('news-feed.index');
})->name('news-feed');

// /news-feed/inews
Route::get('/news-feed/inews', function () {
    return view('news-feed.inews');
})->name('inews');

// make routes for : cowork, colab, codesk & tools
Route::get('/cowork', function () {
    return view('cowork.index');
})->name('cowork');

Route::get('/colab', function () {
    return view('colab.index');
})->name('colab');

Route::get('/codesk', function () {
    return view('codesk.index');
})->name('codesk');

Route::get('/tools', function () {
    return view('tools.index');
})->name('tools');

Route::get('/register', function () {
    return view('register.index');
})->name('register');

Route::get('/login', function () {
    return view('login.index');
})->name('login');

Route::get('/finance', function () {
    return view('categories.finance.index');
})->name('finance');

Route::get('/customer', function () {
    return view('categories.customer_service.index');
})->name('customer');

Route::get('/entrepreneurship', function () {
    return view('categories.entrepreneurship.index');
})->name('entrepreneurship');

Route::get('/funding', function () {
    return view('categories.funding.index');
})->name('funding'); // Corrected from 'finance' to 'funding'

Route::get('/management', function () {
    return view('categories.management.index');
})->name('management');

Route::get('/marketing_sales', function () {
    return view('categories.marketing_sales.index');
})->name('marketing_sales');

Route::get('/personal_growth', function () {
    return view('categories.personal_growth.index');
})->name('personal_growth');
