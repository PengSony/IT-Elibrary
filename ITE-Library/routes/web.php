<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home-page', function () {
    return view('home-page.home-page');
});
Route::get('/book-upload', function () {
    return view('book-upload.book-upload');
});
Route::get('/about-us', function () {
    return view('about.about-us');
});
