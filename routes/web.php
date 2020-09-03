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
//     return view('frontend.index');
// });

Route::get('/','FrontendController@index')->name('index');


Route::get('property','FrontendController@property')->name('property');

Route::get('register','FrontendController@register')->name('register');
Route::get('about','FrontendController@about')->name('about');
Route::get('contact','FrontendController@contact')->name('contact');
Route::get('room/{id}','FrontendController@detail')->name('detail');

Route::get('room','FrontendController@roomcreate')->name('room');
Route::post('store','FrontendController@store')->name('store');
Route::post('cart','FrontendController@cart')->name('cart');
Route::post('search','FrontendController@search')->name('search');

Route::get('roomsearch','FrontendController@roomsearch')->name('roomsearch');



Route::group(['prefix'=>'backside','as'=>'backside.'],function(){

 Route::resource('/category','CategoryController');
 Route::resource('/city','CityController');
 Route::resource('/paymenttype','PaymenttypeController');
 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
