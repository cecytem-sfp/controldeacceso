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

Route::get('/reader', function () {
    return view('reader');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/users/list', 'UsersController@listUsers')
      ->name('userslist');


    Route::get('/user/{id}', 'UsersController@userDetails')
      ->name('userdetails');

    Route::post('/registration', 'HomeController@registration');

    Route::get('/notifications', 'NotificationsController@listNotifications');

    Route::post('/notification/save', 'NotificationsController@saveNotification');

    Route::get('/notification/add', function (){
        return view('notificationForm');
    });
});
