<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/live', 'pages.live')->name('live');
Route::view('/news', 'pages.news')->name('news');
Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/product', 'pages.product')->name('product');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/register', 'pages.register')->name('register');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/about', 'pages.about')->name('about');
Route::view('/team', 'pages.team')->name('team');
Route::view('/drivers', 'pages.drivers')->name('drivers');
Route::view('/juniors', 'pages.juniors')->name('juniors');
Route::view('/youth', 'pages.youth')->name('youth');
Route::view('/tickets', 'pages.tickets')->name('tickets');
Route::view('/hall', 'pages.hall')->name('hall');
Route::view('/blog-single', 'pages.blog-single')->name('blog.single');

Route::view('/index-expo-2', 'pages.index-expo-2')->name('expo.2');
Route::view('/index-expo-3', 'pages.index-expo-3')->name('expo.3');
Route::view('/index-expo-4', 'pages.index-expo-4')->name('expo.4');
