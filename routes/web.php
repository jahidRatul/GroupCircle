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
Route::get('/','WelcomeController@welcome');
Route::get('/timeline','HomeIndexController@homeIndex');
Route::get('/login','HomeIndexController@signInOut');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}', 'ProfileController@index');

Route::get('/update/login/{id}','UpdateController@upLogin');
Route::post('/update/login/save','UpdateController@upLoginSave');
Route::get('/update/basic/{id}','UpdateController@upBasic');
Route::post('/update/save','UpdateController@upBasicSave');
Route::get('/update/education/{id}','UpdateController@upEducation');
Route::post('/update/save2','UpdateController@upEduSave');

Route::get('login/facebook', 'FbLoginControlle@redirectToProvider');
Route::get('login/facebook/callback', 'FbLoginControlle@handleProviderCallback');


Route::get('login/google', 'GmailLoginController@redirectToProvider');
Route::get('login/google/callback', 'GmailLoginController@handleProviderCallback');



Route::get('login/twitter', 'TwitterLoginController@redirectToProvider');
Route::get('login/twitter/callback', 'TwitterLoginController@handleProviderCallback');

Route::get('login/github', 'GitHubLoginController@redirectToProvider');
Route::get('login/github/callback', 'GitHubLoginController@handleProviderCallback');


Route::get('login/linkedin', 'linkedinLoginController@redirectToProvider');
Route::get('login/linkedin/callback', 'linkedinLoginController@handleProviderCallback');

