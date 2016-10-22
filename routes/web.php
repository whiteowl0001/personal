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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('home');
});
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

Route::get('/contact', 'ContactController@contact');
Route::get('/portfolio', 'PortfolioController@portfolio');

Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer){
	$mailer
	    ->to($request->input('mail'))
            ->send(new \App\Mail\mymail($request->input('title')));
	return redirect()->back();
})->name('sendmail');

Route::get('/login', function(){
	
	return view('auth.login');
});
Route::get('/register', function(){
        
        return view('auth.register');
});
Route::get('/portal', function(){
        
        return view('auth.portal');
});

Auth::routes();

