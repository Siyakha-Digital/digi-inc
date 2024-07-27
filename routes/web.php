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


// Group routes  'colab' 
Route::prefix('colab')->group(function () {

    // Route for the index page
    Route::get('/', function () {
        return view('colab.index');
    })->name('colab.index');

    // Route for the Women in Tech page
    Route::get('/women-in-tech', function () {
        return view('colab.women-in-tech');
    })->name('colab.women-in-tech');

    // Route for the Members page
    Route::get('/members', function () {
        return view('colab.members');
    })->name('colab.members');

    // Route for the Media page
    Route::get('/media', function () {
        return view('colab.media');
    })->name('colab.media');

    // Route for the Overview page
    Route::get('/overview', function () {
        return view('colab.overview');
    })->name('colab.overview');

    // Route for the Taks the Dev page
    Route::get('/taks-the-dev', function () {
        return view('colab.taks-the-dev');
    })->name('colab.taks-the-dev');
});


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