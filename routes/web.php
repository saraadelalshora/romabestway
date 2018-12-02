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

/*Route::get('/', function () {
    return view('welcome');
});*/



/*Route::get('admin/ar', function () {
    return view('dashboard.layout.master');
});*/
Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'admin'],function () {





});*/


Route::group(['prefix' => 'admin', 'middleware'=>'Admin'],function () {
    Route::get('/', 'dashboard\AdminController@index')->name('home');
    Route::get('/{lang}', 'dashboard\AdminController@index')->name('home1');
    
    Route::resource('/{lang}/banners', 'dashboard\BannerController');
});




Route::group(['prefix' => 'www', 'middleware'=>'www'],function () {
   // Route::get('/', 'dashboard\AdminController@index')->name('home');
    //Route::get('/{lang}', 'dashboard\AdminController@index')->name('home');
});

