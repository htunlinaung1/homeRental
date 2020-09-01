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

Route::get('/', function () {
    return view('frontend.index');
});


Route::group(['prefix'=>'backside','as'=>'backside.'],function(){

 Route::resource('/category','CategoryController');
 Route::resource('/city','CityController');
 Route::resource('/paymenttype','PaymenttypeController');
 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
