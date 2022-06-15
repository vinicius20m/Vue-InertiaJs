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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace('App\Http\Controllers')->group(function(){

    Route::get('/', 'MainController@home')->name('home') ;
    Route::get('home', 'MainController@home')->name('home') ;

    Route::get('inertia', 'MainController@inertia')->name('inertia') ;
    Route::get('about', 'MainController@about')->name('about') ;

    Route::get('products', 'ProductController@index')->name('products') ;
    Route::get('save-product', 'ProductController@create')->name('new-product') ;
    Route::post('save-product', 'ProductController@store')->name('new-product') ;
    Route::get('edit-product/{product}', 'ProductController@edit')->name('edit-product') ;
    Route::post('edit-product/{product}', 'ProductController@update')->name('edit-product') ;
    Route::get('delete-product/{product}', 'ProductController@destroy')->name('delete-product') ;

}) ;
