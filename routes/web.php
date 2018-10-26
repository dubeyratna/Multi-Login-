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
    return view('welcome');
});

Route::get('auth/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleProviderCallback');
Route::get('auth/google', 'Auth\GoogleController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\GoogleController@handleProviderCallback');
Route::get('auth/linkedin', 'Auth\LinkedinController@redirectToProvider');
Route::get('auth/linkedin/callback', 'Auth\LinkedinController@handleProviderCallback');
Route::get('auth/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('auth/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
Route::get('auth/github', 'Auth\GithubController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\GithubController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('addimage', 'AddImageController@index');
Route::get('addimage/create', 'AddImageController@create');
Route::post('addimage', 'AddImageController@store');
