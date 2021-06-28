<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/articles', 'ArticleController@index')->name('article.index');
Route::get('/articles/{id}', 'ArticleController@show')->name('article.show');
Route::post('comment/{id}', 'ArticleController@commentStore')->name('comment.store'); // route comment article store
Route::get('levels/{id}','ArticleController@levels')->name('level.index');
Route::get('contact-us','ContactUsController@create')->name('contact-us.create');
Route::post('contact-us','ContactUsController@store')->name('contact-us.store');
Route::get('about-us','AboutUsController@index')->name('about-us.index');

