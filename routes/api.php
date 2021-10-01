<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/authenticate', 'Api\UserController@authenticate');
Route::group(['middleware' => ['api', 'auth:api'], 'prefix' => 'gallery'], function ()
{
    Route::post('/create', 'Api\GalleryController@create');
    Route::get('/all', 'Api\GalleryController@all');
});
