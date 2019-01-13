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
    return view('user.home');
});
Route::view('/help', 'user.help');
Route::get('/gods', 'LordController@getLords');
Route::get('/gods/{lord}', 'LordController@getLord');
Route::get('/people/{username}', 'MessageController@getProfile');

Route::group(['prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::get('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'god'], function () {
  Route::get('/login', 'GodAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'GodAuth\LoginController@login');
  Route::get('/logout', 'GodAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'GodAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'GodAuth\RegisterController@register');

  Route::post('/password/email', 'GodAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'GodAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'GodAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'GodAuth\ResetPasswordController@showResetForm');
});
