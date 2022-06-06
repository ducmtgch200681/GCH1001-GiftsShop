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
Route::group(['prefix' => 'Admin'], function () {
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

//Category
Route::group(['prefix' => 'Category'], function () {
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
Route::group(['prefix' => 'Gifts'], function () {
    Route::get('', [
        'uses' => 'GiftsControllerWithRepos@index',
        'as' => 'gifts.index'
    ]);

    Route::get('show/{Elec_id}',[
        'uses' => 'GiftsControllerWithRepos@show',
        'as' => 'gifts.show'
    ]);

    Route::get('create',[
        'uses' => 'GiftsControllerWithRepos@create',
        'as' => 'gifts.create'
    ]);

    Route::post('create',[
        'uses' => 'GiftsControllerWithRepos@store',
        'as' => 'gifts.store'
    ]);

    Route::get('update/{Elec_id}',[
        'uses' => 'GiftsControllerWithRepos@edit',
        'as' => 'gifts.edit'
    ]);

    Route::post('update/{Elec_id}',[
        'uses' => 'GiftsControllerWithRepos@update',
        'as' => 'gifts.update'
    ]);

    Route::get('delete/{Elec_id}', [
        'uses' => 'GiftsControllerWithRepos@confirm',
        'as' => 'gifts.confirm'
    ]);

    Route::post('delete/{Elec_id}',[
        'uses' => 'GiftsControllerWithRepos@destroy',
        'as' => 'gifts.destroy'
    ]);
});