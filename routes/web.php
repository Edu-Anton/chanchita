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
Auth::routes();

Route::view('/acerca-de-nosotros', 'about')->name('about');
Route::view('/servicios', 'services')->name('services'); 
Route::view('/preguntas-frecuentes', 'faq')->name('faq'); 
Route::view('/', 'welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categorias', 'CategoryController@index')->middleware('auth')->name('category.index');
Route::get('/categorias/create', 'CategoryController@create')->name('category.create');
Route::post('/categorias', 'CategoryController@store')->name('category.store');
Route::get('/categorias/{category}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/categorias/{category}', 'CategoryController@update')->name('category.update');
Route::delete('/categorias/{category}', 'CategoryController@destroy')->name('category.destroy');

Route::get('/productos', 'ProductController@index')->name('product.index');
Route::get('/productos/create', 'ProductController@create')->name('product.create');
Route::post('/productos', 'ProductController@store')->name('product.store');
Route::get('/productos/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::put('/productos/{product}', 'ProductController@update')->name('product.update');
Route::delete('/productos/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('/chanchitas', 'ChanchitaController@index')->name('chanchita.index');
Route::get('/chanchitas/create', 'ChanchitaController@create')->name('chanchita.create');
Route::post('/chanchitas', 'ChanchitaController@store')->name('chanchita.store');
Route::get('/chanchitas/{chanchita}', 'ChanchitaController@show')->name('chanchita.show');
Route::get('/chanchitas/{chanchita}/edit', 'ChanchitaController@edit')->name('chanchita.edit');
Route::put('/chanchitas/{chanchita}', 'ChanchitaController@update')->name('chanchita.update');
Route::delete('/chanchitas/{chanchita}', 'ChanchitaController@destroy')->name('chanchita.destroy');

Route::get('/chanchitas/{chanchita}/categorias/{category_id}', 'ChanchitaCategoryController@index')->name('chanchita.category.index');
Route::get('/add-cart', 'ChanchitaCategoryController@add_to_cart')->name('add.cart');


Route::get('/invitaciones', 'InvitationController@index')->name('invitation.index');
Route::post('/invitaciones/search', 'InvitationController@search')->name('invitation.search');
Route::get('/invitaciones/accept', 'InvitationController@accept')->name('invitation.accept');
Route::get('/invitaciones/{chanchita_id}', 'InvitationController@show')->name('invitation.show');
Route::delete('/invitaciones/{chanchita_id}', 'InvitationController@destroy')->name('invitation.destroy');

Route::get('image/upload', 'ImageController@create')->name('image.create');
Route::post('image/upload', 'ImageController@store')->name('image.store');


