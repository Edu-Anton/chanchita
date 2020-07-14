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

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/profile/{user}', 'ProfileController@show')->middleware('auth')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->middleware('auth')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfileController@update')->middleware('auth')->name('profile.update');


Route::get('/categorias', 'CategoryController@index')->middleware('auth')->name('category.index');
Route::get('/categorias/create', 'CategoryController@create')->middleware('auth')->name('category.create');
Route::post('/categorias', 'CategoryController@store')->middleware('auth')->name('category.store');
Route::get('/categorias/{category}/edit', 'CategoryController@edit')->middleware('auth')->name('category.edit');
Route::put('/categorias/{category}', 'CategoryController@update')->middleware('auth')->name('category.update');
Route::delete('/categorias/{category}', 'CategoryController@destroy')->middleware('auth')->name('category.destroy');

Route::get('/productos/search', 'ProductController@search')->middleware('auth')->name('product.search');
Route::get('/productos', 'ProductController@index')->middleware('auth')->name('product.index');
Route::get('/productos/create', 'ProductController@create')->middleware('auth')->name('product.create');
Route::post('/productos', 'ProductController@store')->middleware('auth')->name('product.store');
Route::get('/productos/{product}/edit', 'ProductController@edit')->middleware('auth')->name('product.edit');
Route::put('/productos/{product}', 'ProductController@update')->middleware('auth')->name('product.update');
Route::delete('/productos/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('/chanchitas', 'ChanchitaController@index')->middleware('auth')->name('chanchita.index');
Route::get('/chanchitas/create', 'ChanchitaController@create')->middleware('auth')->name('chanchita.create');
Route::post('/chanchitas', 'ChanchitaController@store')->middleware('auth')->name('chanchita.store');
Route::get('/chanchitas/{chanchita}', 'ChanchitaController@show')->middleware('auth')->name('chanchita.show');
Route::get('/chanchitas/{chanchita}/edit', 'ChanchitaController@edit')->middleware('auth')->name('chanchita.edit');
Route::put('/chanchitas/{chanchita}', 'ChanchitaController@update')->middleware('auth')->name('chanchita.update');
Route::delete('/chanchitas/{chanchita}', 'ChanchitaController@destroy')->middleware('auth')->name('chanchita.destroy');

Route::delete('/chanchita/productlist/{product_id}', 'ChanchitaProductListController@destroy')->middleware('auth')->name('chanchita.product.list.destroy');

Route::get('/chanchitas/{chanchita}/categorias/{category_id}', 'ChanchitaCategoryController@index')->middleware('auth')->name('chanchita.category.index');
Route::post('/add-cart', 'ChanchitaCategoryController@add_to_cart')->middleware('auth')->name('add.cart');


Route::get('/invitaciones', 'InvitationController@index')->middleware('auth')->name('invitation.index');
Route::post('/invitaciones/search', 'InvitationController@search')->middleware('auth')->name('invitation.search');
Route::get('/invitaciones/accept', 'InvitationController@accept')->middleware('auth')->name('invitation.accept');
Route::get('/invitaciones/{chanchita_id}', 'InvitationController@show')->middleware('auth')->name('invitation.show');
Route::delete('/invitaciones/{chanchita_id}', 'InvitationController@destroy')->middleware('auth')->name('invitation.destroy');

Route::get('image/upload', 'ImageController@create')->middleware('auth')->name('image.create');
Route::post('image/upload', 'ImageController@store')->middleware('auth')->name('image.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
