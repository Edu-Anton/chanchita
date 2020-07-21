<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/chanchita/{chanchita_id}/userlist', 'Api\ChanchitaUserListController@index')->name('api.chanchita.user.list.index');
Route::post('/chanchita/{chanchita_id}/userlist/guest', 'Api\ChanchitaUserListController@store')->name('api.chanchita.user.list.store');
Route::put('/chanchita/{chanchita_id}/userlist/guest/{guest_id}', 'Api\ChanchitaUserListController@update')->name('api.chanchita.user.list.update');
Route::delete('/chanchita/{chanchita_id}/userlist/guest/{guest_id}', 'Api\ChanchitaUserListController@destroy')->name('api.chanchita.user.list.destroy');

Route::get('/chanchitas/{chanchita_id}/categorias/{category_id}/productos', 'Api\ChanchitaProductController@index')->name('api.chanchita.product.index');
Route::post('/chanchitas/{chanchita_id}/categorias/{category_id}/productos', 'Api\ChanchitaProductController@added')->name('api.chanchita.product.added');

