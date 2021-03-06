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

Route::prefix('/')->namespace('Frontend')->group(function () {
    Route::get('/', 'FrontendController@index')->name('frontend.index');
    Route::get('/info', 'FrontendController@pageInfo')->name('frontend.page.info');
    Route::get('/shop', 'FrontendController@pageShop')->name('frontend.page.shop');

    Route::prefix('categories')->group(function () {
        Route::get('/subcategory/{category}', 'CategoryController@show')->name('subcategory');
    });

    Route::prefix('products')->group(function () {
        Route::get('/{category}', 'ProductController@show')->name('product');
        Route::get('/options/{product}', 'ProductController@options')->name('product.options');
        Route::any('/cart/{product}', 'ProductController@cart')->name('product.cart');
    });
});

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/' , 'AdminController@index')->name('admin');

    Route::prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@index')->name('categories');
        Route::post('/create', 'CategoryController@create')->name('category.create');
        Route::post('/subCategory/{category}', 'CategoryController@subCategory')->name('category.subcategory');
        Route::get('/show/{category}', 'CategoryController@show')->name('category.show');
        Route::get('/edit/{category}', 'CategoryController@edit')->name('category.edit');
        Route::post('/update/{category}', 'CategoryController@update')->name('category.update');
        Route::get('/delete/{category}', 'CategoryController@delete')->name('category.delete');
    });

    Route::prefix('products')->group(function () {
        Route::get('/' , 'ProductsController@index')->name('admin.products');
        Route::post('/create' , 'ProductsController@create')->name('admin.products.create');
        Route::post('/import' , 'ProductsController@import')->name('admin.products.import');
        Route::get('/edit/{product}' , 'ProductsController@edit')->name('admin.product.edit');
        Route::post('/update/{product}' , 'ProductsController@update')->name('admin.product.update');
        Route::get('/delete/{product}' , 'ProductsController@delete')->name('admin.product.delete');
        Route::get('/deletes' , 'ProductsController@deletes')->name('admin.products.delete');
    });
});
