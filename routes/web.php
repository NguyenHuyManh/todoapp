<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['prefix' => '/'], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index',
        'middleware' => 'checkLogin'
    ]);

    Route::get('in-progress', [
        'as' => 'in-progress',
        'uses' => 'HomeController@inProgress',
        'middleware' => 'checkLogin'
    ]);
});

Route::get('login', [
    'as' => 'login',
    'uses' => 'AuthController@getLogin',
    'middleware' => 'checkLogined'
]);

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'AuthController@logout'
]);

Route::post('login-post', [
    'as' => 'post.login',
    'uses' => 'AuthController@postLogin'
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'AuthController@getRegister'
]);
