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

Route::group(['domain' => env('HOME_DOMAIN',''),'middleware' => 'web','namespace' => 'Blog'],function ()
{
    Route::get('/blog/markdown','BlogController@getMark');
    Route::get('/blog/md-editor','BlogController@getEditor');
    Route::get('/','BlogController@getIndex');
    Route::get('/blog/get-content/{id}','BlogController@getViewContent');
    Route::post('/blog/store-blog','BlogController@postStoreContent');

});