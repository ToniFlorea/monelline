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

Auth::routes();

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::get('/', 'PagesController@welcome');
Route::get('/faq', 'PagesController@faq');
Route::get('/contact', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'PagesController@menu');
