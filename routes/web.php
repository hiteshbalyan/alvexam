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

Route::get('/', function() {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
  Route::post('/dashboard', 'AdminController@submitQuiz')->name('admin.dashboard.submit');
});

Route::prefix('user')->group(function() {
  Route::get('exam', 'ExamController@index')->name('user.dashboard');
  Route::get('paper', 'ExamController@getPaper')->name('api.getPaper');
  Route::get('stats', 'ExamController@getStats')->name('api.getStats');
  Route::get('question', 'ExamController@getQuestion')->name('api.getQuestion');
  Route::post('question/{question}', 'ExamController@submitQuestion')->name('api.submitQuestion');
});


