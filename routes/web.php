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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'WebsiteController@index')->name('website.index');
Route::get('/admin', 'UserController@index')->name('admin.index');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');


Route::get('/logout', 'LogoutController@index')->name('logout.index');


//Route::post('/image/edit/{id}', 'ImageController@editimage');


// user

Route::get('/userlist', 'UserController@list')->name('user.list');
Route::get('/register', 'UserController@add')->name('user.add');
// Route::get('/user/add', 'UserController@adddata');

// Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
// Route::get('/user/edit/{id}', 'UserController@editdata');
// Route::get('/user/delete', 'UserController@deletedata');
