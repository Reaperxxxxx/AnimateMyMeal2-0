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
Route::resource('category','CategoryController') ;
Route::resource('meal','MealController');
Route::resource('employee','EmployeeController');
Route::resource('promotion','PromotionController');
Route::resource('adminResto','AdminRestoController');
Route::resource('asset','AssetStoreController');
Route::resource('categoryAsset','CategoryAssetController');


Route::get('assetStore', 'AssetStoreController@assetStore');
Route::get('assetStore/{id}', 'AssetStoreController@assetStoreCat');
Route::get('download/{id}', 'AssetStoreController@getDownload');
Route::get('assetStore/assetDetails/download/{id}', 'AssetStoreController@getDownload');


Route::get('assetDetails/{id}','AssetStoreController@details');
Route::get('assetStore/assetDetails/{id}','AssetStoreController@details');
Route::get('cookieResto','AdminRestoController@setCookie');
Route::get('statsResto','AdminRestoController@stat');
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::get('employee/{idRes}/yahya', 'EmployeeController@res');


Route::get('/datatables','DatatablesController@getIndex');
Route::get('/anyData','DatatablesController@anyData')->name('datatables.data');
Route::resource('/mesCommandes','OrdersController');
Route::get('/makeItReady/{id}','OrdersController@makeItReady');

Route::group(['prefix' => 'api'], function () {
    Route::resource('restaurant','api\RestaurantController') ;
    Route::resource('meal','api\MealController') ;
        Route::get('getmealsbycat/{id_cat}','api\MealController@mealsByCat') ;
    Route::resource('category','api\CategoryController') ;
        Route::get('getrestaurantcategories/{id_resto}','api\CategoryController@catbyresto') ;
        Route::get('getcatwithmeals/{id_resto}','api\CategoryController@catWithMeals');
    Route::resource('promotion','api\PromotionController') ;
        Route::get('promomeals','api\PromotionController@promomeals') ;
        Route::resource("orders","api\OrdersController");
        Route::get('createOrderWithMealsIds/{meals_ids}/{total}','api\OrdersController@createOrderWithMealsIds');
        Route::resource("orderLists","api\OrderListsController");

});