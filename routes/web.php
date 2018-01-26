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

Route::resource('restaurant','RestaurantController') ;




Route::group(['prefix' => 'api'], function () {
    Route::resource('restaurant','api\RestaurantController') ;
    Route::resource('meal','api\MealController') ;
    Route::resource('category','api\CategoryController') ;
    Route::resource('promotion','api\PromotionController') ;
        Route::get('promomeals','api\PromotionController@promomeals') ;


});