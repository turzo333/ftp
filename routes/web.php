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
 Route::post('/register', 'UserController@adddata');

 Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
 Route::post('/user/edit/{id}', 'UserController@editdata');
 Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');



 //Category


 Route::get('/category', 'CategoryController@list')->name('category.list');
Route::get('/category/add', 'CategoryController@add')->name('category.add');
 Route::post('/category/add', 'CategoryController@adddata');

 Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
 Route::post('/category/edit/{id}', 'CategoryController@editdata');
 Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');



 Route::get('/media', 'CategoryController@list')->name('media.list');
Route::get('/media/add', 'CategoryController@add')->name('media.add');
 Route::post('/media/add', 'CategoryController@adddata');

 Route::get('/media/edit/{id}', 'CategoryController@edit')->name('media.edit');
 Route::post('/media/edit/{id}', 'CategoryController@editdata');
 Route::get('/media/delete/{id}', 'CategoryController@delete')->name('media.delete');