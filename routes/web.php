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
Route::get('/','pageController@home');
Route::get('home','pageController@home');
Route::get('login','pageController@login');
Route::get('register','pageController@register');
Route::resource('product','ProductController');
Route::resource('user','userController');
