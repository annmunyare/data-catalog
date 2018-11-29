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



//Routes for datacatlog
Route::get('/catalogsindex',  'CatalogController@index');
Route::get('/',  'CatalogController@index');
Route::get('/catalogs',  'CatalogController@getstate');
Route::get('/singlecatalog/{id}',  'CatalogController@show');

Route::get('/groups',  'ICPAKController@getstate');
// Route::get('/ICPAK',  'ICPAKController@index');