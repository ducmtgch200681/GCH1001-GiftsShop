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
    return view('welcome');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::get('show/{Ad_id}',[
        'uses' => 'AdminController@show',
        'as' => 'admin.show'
    ]);

    Route::get('update/{Ad_id}',[
        'uses' => 'AdminController@edit',
        'as' => 'admin.edit'
    ]);

    Route::post('update/{Ad_id}',[
        'uses' => 'AdminController@update',
        'as' => 'admin.update'
    ]);
    //delete
//    Route::get('delete/{Ad_id}', [
//        'uses' => 'AdminController@confirm',
//        'as' => 'admin.confirm'
//    ]);
//
//    Route::post('delete/{Ad_id}',[
//        'uses' => 'AdminController@destroy',
//        'as' => 'admin.destroy'
//    ]);
});

//Customer

Route::group(['prefix' => 'customer'], function(){
    Route::get('', [
        'uses' => 'CustomerController@index',
        'as' => 'customer.index'
    ]);
    Route::get('show/{Cus_id}' , [
        'uses' => 'CustomerController@show',
        'as' => 'customer.show'
    ]);
    Route::get('update/{Cus_id}', [
        'uses' => 'CustomerController@edit',
        'as' => 'customer.edit'
    ]);
    Route::post('update/{Cus_id}', [
        'uses' => 'CustomerController@update',
        'as' => 'customer.update'
    ]);
});

//Category
Route::group(['prefix' => 'category'], function () {
    Route::get('', [
        'uses' => 'CategoryController@index',
        'as' => 'category.index'
    ]);

    Route::get('show/{Cate_id}',[
        'uses' => 'CategoryController@show',
        'as' => 'category.show'
    ]);

    Route::get('create',[
        'uses' => 'CategoryController@create',
        'as' => 'category.create'
    ]);

    Route::post('create',[
        'uses' => 'CategoryController@store',
        'as' => 'category.store'
    ]);

    Route::get('update/{Cate_id}',[
        'uses' => 'CategoryController@edit',
        'as' => 'category.edit'
    ]);

    Route::post('update/{Cate_id}',[
        'uses' => 'CategoryController@update',
        'as' => 'category.update'
    ]);

    Route::get('delete/{Cate_id}', [
        'uses' => 'CategoryController@confirm',
        'as' => 'category.confirm'
    ]);

    Route::post('delete/{Cate_id}',[
        'uses' => 'CategoryController@destroy',
        'as' => 'category.destroy'
    ]);
});

//Product
Route::group(['prefix' => 'gifts'], function () {
    Route::get('', [
        'uses' => 'GiftsController@index',
        'as' => 'product.index'
    ]);

    Route::get('show/{Gifts_id}',[
        'uses' => 'GiftsController@show',
        'as' => 'product.show'
    ]);

    Route::get('create',[
        'uses' => 'GiftsController@create',
        'as' => 'product.create'
    ]);

    Route::post('create',[
        'uses' => 'GiftsController@store',
        'as' => 'product.store'
    ]);

    Route::get('update/{Gifts_id}',[
        'uses' => 'GiftsController@edit',
        'as' => 'product.edit'
    ]);

    Route::post('update/{Gifts_id}',[
        'uses' => 'GiftsController@update',
        'as' => 'product.update'
    ]);

    Route::get('delete/{Gifts_id}', [
        'uses' => 'GiftsController@confirm',
        'as' => 'product.confirm'
    ]);

    Route::post('delete/{Gifts_id}',[
        'uses' => 'GiftsController@destroy',
        'as' => 'product.destroy'
    ]);
});

//Login(Cus)
Route::group(['prefix' => 'login'], function (){
    Route::get('',[
        'uses' => 'CustomerController@loginCus',
        'as' => 'customer.loginCus'
    ]);
});
//Register
Route::group(['prefix' => 'register'], function (){
    Route::get('',[
        'uses' => 'CustomerController@registerCus',
        'as' => 'customer.registerCus'
    ]);

    Route::post('',[
        'uses' => 'CustomerController@store',
        'as' => 'customer.store'
    ]);
});

//Mainpage
Route::group(['prefix' =>  'giftsshop'], function (){
    Route::get('',[
        'uses' => 'MainpageController@index',
        'as' => 'GiftsShop.Mainpage.homepage'
    ]);

});
