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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/create','PostsController@create');

//主页
Route::get('/home/{id}','HomeController@articledetail')->name('articledetail');
//文章
//账号管理
Route::get('/pwdmanage','PwdmanageController@index')->name('pwdmanage');
