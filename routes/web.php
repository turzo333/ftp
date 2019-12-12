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
Route::get('/userlist', 'UserController@list')->name('user.list');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');


Route::get('/logout', 'LogoutController@index')->name('logout.index');


//Route::post('/image/edit/{id}', 'ImageController@editimage');