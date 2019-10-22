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
    return view('site.layouts.home');
});

Route::get('/pages', function () {
    return view('site.layouts.page');
});
Route::get('/contact', function () {
    return view('site.layouts.contact');
});
Route::get('/cities', function () {
    return view('site.layouts.cities');
});
Route::get('/news', function () {
    return view('site.layouts.news');
});
Route::get('/news/item', function () {
    return view('site.layouts.news_item');
});