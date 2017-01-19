<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*Login and Registration*/
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');
Route::get('/login', function(){return view('auth.login');});
Route::get('/register', function(){return view('auth.register');});
Route::get('/', function () {return view('welcome');});
Route::get('/homepage', function () {return view('home');});

/*Regular Pages*/
Route::get('/contact', 'ContactController@contact');
Route::get('/portfolio', 'PortfolioController@portfolio');
Route::post('sendmail', [ 'as' => 'sendmail', 'uses' => 'ContactController@sendEmail']);
Route::get('defaultsend', 'emailController@defaultmail');
Route::post('/add/project/image', 'ProjectController@CreateProjectDisplay');

/*Auth Pages*/
Route::get('/portal', 'ProjectController@index');
Route::get('/add', function(){
        
        return view('auth.add');
});

/*Lone Wolf */
Route::get('/lwhome', 'LwproductsController@LW_Home');
Route::get('/lwnewsletter', 'LwproductsController@LW_Newsletter');
Route::get('/lwpreowned', 'LwproductsController@LW_Index');
Route::get('/lw_add', 'LwproductsController@LW_Add');
Route::post('/lw_motorcycle_display', 'LwproductsController@CreateMotorcycle');

/*Guitar*/
Route::get('/guitar', function(){
        
        return view('auth.guitar');
});

/*Web Crawler App*/
Route::get('/crawler/search', 'WebCrawlerController@search');
Route::get('/crawler', 'WebCrawlerController@crawler');
Auth::routes();

