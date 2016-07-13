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

// Home & Portfolio
Route::get('/', [
    'as' => 'home', 'uses' => 'PagesController@portfolio'
]);

// Maby in future
Route::get('blog', [
    'as' => 'glog', 'uses' => 'PagesController@blog'
]);

// Sketching with html & css 
Route::get('sketch', [
    'as' => 'sketch', 'uses' => 'PagesController@sketch'
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
