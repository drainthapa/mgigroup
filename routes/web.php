<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.front');
});

Route::get('/front/about-us',function(){
	return view('front.about-us');
});

Route::get('/front/company-details',function(){
	return view('front.company-details');
});

Route::get('/front/contact',function(){
	return view('front.contact');
});

Route::get('/front/news',function(){
	return view('front.news');
});

Route::get('/front/single-news',function(){
	return view('front.single-news');
});

Route::get('/front/milestone',function(){
	return view('front.milestone');
});

Route::get('/front/awards',function(){
	return view('front.awards');
});