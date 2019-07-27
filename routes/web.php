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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

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

    Route::post('/notifications/save', 'NotificationsController@saveNotification');

    Route::get('/notification/{id}', 'NotificationsController@getNotification');

    Route::get('/notifications/add', 'NotificationsController@addNotification');
});
