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
    $title = 'home';
    return view('home', compact('title'));
})->name('home');
Route::get('/comics', function () {
    $title = 'comics';
    return view('comics', compact('title'));
})->name('comics');
Route::get('/characters', function () {
    $title = 'comics';
    return view('characters', compact('title'));
})->name('characters');
Route::get('/movies', function () {
    $title = 'movies';
    return view('movies', compact('title'));
})->name('movies');
