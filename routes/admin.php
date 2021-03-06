<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "dashboard" middleware group. Now create something great!
|
*/

Route::namespace('Admin')->middleware(['auth','admin'])->prefix('dashboard')->group(function () {

    Route::get('/', 'HomeController@index')->name('dashboard.home');
    Route::resource('categories' ,'CategoryController');
    Route::resource('articles' ,'ArticleController');
    Route::post('commentArticleStore/{id}' ,'ArticleController@commentStore')->name('commentArticleStore');
    Route::resource('levels' ,'LevelController');
    Route::resource('tags' ,'TagController');
    Route::resource('appointments' ,'AppointmentController');
    Route::resource('events' ,'EventController');
    Route::resource('services' ,'ServiceController');
    Route::resource('testimonials' ,'TestimonialController');
    Route::resource('about_us' ,'AboutUsController');
    Route::resource('settings' ,'SettingController');
    Route::resource('users' ,'UserController');
    Route::resource('mail' ,'MailController');
    Route::get('email/sender' ,'MailController@sender')->name('mail.sender');
    Route::get('email/delete' ,'MailController@delete')->name('mail.delete');
});

