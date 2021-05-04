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

Route::group(['prefix' => '/'], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index',
        'middleware' => 'checkLogin'
    ]);

    Route::post('add-task', [
        'as' => 'task.store',
        'uses' => 'HomeController@store'
    ]);

    Route::get('delete-task/{id}', [
        'as' => 'task.destroy',
        'uses' => 'HomeController@destroy'
    ]);

    Route::get('update-task/{id}', [
        'as' => 'task.update',
        'uses' => 'HomeController@update'
    ]);

    Route::get('in-progress', [
        'as' => 'in-progress',
        'uses' => 'HomeController@inProgress',
    ]);

    Route::get('completed', [
        'as' => 'completed',
        'uses' => 'HomeController@completed',
    ]);

    Route::get('today', [
        'as' => 'today',
        'uses' => 'HomeController@today',
    ]);

    Route::get('tomorow', [
        'as' => 'tomorow',
        'uses' => 'HomeController@tomorow',
    ]);

    Route::get('month', [
        'as' => 'month',
        'uses' => 'HomeController@month',
    ]);

    // Profile
    Route::get('profile', [
        'as' => 'profile',
        'uses' => 'AuthController@profile',
    ]);

    Route::post('profile-update', [
        'as' => 'profile.update',
        'uses' => 'AuthController@profileUpdate',
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
