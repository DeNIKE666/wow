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

Route::prefix('admin')->group(function () {
    Route::get('/' , 'Admin\AdminController@index')->name('admin');
});
