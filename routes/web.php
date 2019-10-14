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

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/info', 'FrontendController@pageInfo')->name('frontend.page.info');
Route::get('/shop', 'FrontendController@pageShop')->name('frontend.page.shop');

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/' , 'AdminController@index')->name('admin');

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@index')->name('categories');
        Route::post('/create', 'CategoryController@create')->name('categorory.create');
        Route::post('/subCategory/{category}', 'CategoryController@show')->name('categorory.subcategory');
        Route::get('/show/{category}', 'CategoryController@show')->name('categorory.show');
        Route::get('/edit/{category}', 'CategoryController@edit')->name('categorory.edit');
        Route::post('/update/{category}', 'CategoryController@update')->name('categorory.update');
    });
});
