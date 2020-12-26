<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('cate', 'HomeController@cate')->name('cate');
Route::get('search', 'HomeController@search')->name('search');
Route::get('author', 'HomeController@author')->name('author');
Route::get('post/{slug}', 'HomeController@materi')->name('materi');

Auth::routes();
Route::get('admin', 'AdminController@index')->name('admin');
