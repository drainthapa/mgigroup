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


Route::get('/front/about-us',function(){
	return view('front.about-us');
});

Route::get('/front/contact',function(){
	return view('front.contact');
});


Route::get('/front/milestone',function(){
	return view('front.milestone');
});

Route::get('/front/awards',function(){
	return view('front.awards');
});

Route::get('/','FrontPageController@index')->name('front-page');

Route::get('/front/pages/{company}','FrontPageController@show')->name('company.show');
Route::get('/front/news','BlogController@index')->name('news-page');
Route::get('/front/{blog}','BlogController@showblog')->name('blog.showblog');

