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

Route::get('/front/milestone',function(){
	return view('front.milestone');
});

Route::get('/front/awards',function(){
	return view('front.awards');
});

Route::get('/front/contact',function(){
	return view('front.contact');
});

Route::get('/front/privacypolicy',function(){
	return view('front.privacypolicy');
});


Route::get('/','FrontPageController@index')->name('front-page');

Route::get('/front/pages/aboutus/about-us','AboutUsPageController@index')->name('about-us-page');

Route::match(['get','post'],'/front/pages/companygroup/{company}','FrontPageController@show')->name('company.show');

Route::get('/front/pages/newsblog/news','BlogController@index')->name('news-page');
Route::match(['get','post'],'//front/pages/newsblog/{blog}','BlogController@showblog')->name('blog.showblog');

Route::get('/front/pages/certificate/certification','CertificatePageController@index')->name('certification-page');
Route::match(['get','post'],'/front/pages/certificate/{certificate}','CertificatePageController@show')->name('certificate.show');

Route::get('/front/pages/career/careers','CareerController@index')->name('career-page');
Route::match(['get','post'],'/front/pages/career/{career}','CareerController@show')->name('career.show');
