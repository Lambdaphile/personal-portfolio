<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Home
Route::get('/', [
    'as' => 'home', 'uses' => 'PracticeController@index'
]);

// About
Route::get('about', [
    'as' => 'about', 'uses' => 'PracticeController@about'
]);

// Contact
Route::get('contact', [
    'as' => 'contact', 'uses' => 'PracticeController@contact'
]);

// Portfolio
Route::get('portfolio', [
    'as' => 'portfolio', 'uses' => 'PracticeController@portfolio'
]);

// Profile
Route::get('profile', [
    'as' => 'profile' , function () { return 'works.'; }
]);

// Skills
Route::get('skills', [
    'as' => 'skills', 'uses' => 'PracticeController@skills'
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
