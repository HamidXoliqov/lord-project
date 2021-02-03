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

Route::get('/', 'frontend\SiteController@index')->name('index');
Route::get('/home', 'frontend\SiteController@index')->name('home');



Route::get('/admin','backend\AdminController@loginForm')->name('admin');
Route::get('/signup','backend\AdminController@signupForm')->name('signup');
Route::post('/logadmin', 'backend\AdminController@login');
Route::post('/signup', 'backend\AdminController@signup');
Route::get('/bot-send','backend\FeedbackController@send')->name('bot-send');
Route::post('/bot-send','backend\FeedbackController@send');


Route::group(['middleware' => 'admin'], function () {
	Route::get('/dashboard','backend\AdminController@dashboard')->name('dashboard');
	
    Route::resource('/admin-users','backend\UserController');
	Route::get('/admin-users/status/{id}','backend\UserController@status');
	
	Route::resource('/admin-about','backend\AboutController');
	// Route::get('/admin-about/status/{id}','backend\AboutController@status');
	
	Route::resource('/admin-service','backend\ServiceController');

	Route::resource('/admin-carousel','backend\CarouselController');

	Route::resource('/admin-comment','backend\CommentController');

	Route::resource('/admin-feedback','backend\FeedbackController');

	Route::resource('/admin-partners','backend\PartnersController');

	Route::resource('/admin-process','backend\ProcessController');

	Route::resource('/admin-team','backend\TeamController');

	Route::resource('/admin-title','backend\TitleController');
	Route::get('/admin-title/slug/{slug}','backend\TitleController@content');

	Route::resource('/admin-text','backend\TextController');
	Route::get('/admin-text/slug/{slug}','backend\TextController@content');

	Route::resource('/admin-settings','backend\SettingsController');

});

Route::resource('/about','frontend\AboutController');
Route::resource('/service','frontend\ServiceController');
Route::resource('/contact','frontend\ContactController');


