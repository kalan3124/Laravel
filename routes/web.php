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
    return view('content.home');
});

Route::get('/react', function () {
    return view('index');
});

//user Routes
Route::get('/login','UserRegistrationController@index');
Route::post('/register','UserRegistrationController@UserRegister');
Route::post('/login','UserRegistrationController@login');
Route::get('/logout','UserRegistrationController@logout');

Route::group(['middleware' => 'user'],function(){
    //sale mobile user wise
    Route::get('/mobile_shop_sale/{id}','SaleMobilePhoneController@index');
    Route::post('/sale_mobile','SaleMobilePhoneController@SaleMobile');
    Route::get('/mobile_shop','DistrictController@index');
    Route::get('/mobile_shop_areas','AreaController@getAreas');

    //sale mobile shop wise
    Route::get('/shop_wise_sale','ShopSaleMobilePhoneController@index');
    Route::post('/shop_sale_mobile_post','ShopSaleMobilePhoneController@ShopWiseSaleMobile');
    Route::get('/show_shops_posts','ShopSaleMobilePhoneController@getAllShopAds');
});

//common
Route::get('/load_models','ModelController@LoadModel');


Route::view('/{path?}', 'index')
    ->where('path', '.*')
    ->name('index');