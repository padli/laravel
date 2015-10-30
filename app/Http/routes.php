<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return '<h1>Hallo</h1>'
	.'Selamat datang<br>'
	.'Selamat Datang di laravel pertama';
});

Route::get('motor/{jenis?}',function($jenis=null){
 if($jenis == null) return "Motor Dashboard Page";
 return "Motor dengan jenis ".$jenis;
});

Route::get('hp', function(){
	return '<h1>Hello aplikasi hp</h1>';
});
