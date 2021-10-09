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



Auth::routes();
Route::view('/', 'auth/login');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AllController@index')->name('masterAdmin');

Route::get('/manageCom', 'commentController@index')->name('manage');
Route::get('/manageCom/delete/{id}','commentController@delete');
Route::get('/manageCom/cetak_pdf', 'commentController@cetak_pdf');

Route::get('/recipeAll','recipeController@index');
Route::get('/searchAll','recipeController@search') ;
Route::get('/recipeAll/cetak_pdf/{id}', 'recipeController@cetak_pdf');

Route::get('/recipeAll/recipe/{id}','recipeAllController@article')->name('article');
Route::post('/recipeAll/recipe/{id}','recipeAllController@insertData')->name('insertData');
Route::get('/manageAll', 'recipeAllController@index')->name('manage');
Route::get('/recipeAll/add','recipeAllController@add');
Route::post('/recipeAll/create','recipeAllController@create');
Route::get('/recipeAll/edit/{id}','recipeAllController@edit');
Route::post('/recipeAll/update/{id}','recipeAllController@update');
Route::get('/recipeAll/delete/{id}','recipeAllController@delete');
Route::get('/recipeAll/cetak_pdf', 'recipeAllController@cetak_pdf');

Route::get('/popular','PopularController@index');
Route::get('/search','PopularController@search') ;
Route::get('/recipePop/cetak_pdf/{id}', 'PopularController@cetak_pdf');

Route::get('/popular/recipePop/{id}','recipePopController@article')->name('article');
Route::post('/popular/recipePop/{id}','recipePopController@insertData')->name('insertData');
Route::get('/managePop', 'recipePopController@index')->name('manage');
Route::get('/recipePop/add','recipePopController@add');
Route::post('/recipePop/create','recipePopController@create');
Route::get('/recipePop/edit/{id}','recipePopController@edit');
Route::post('/recipePop/update/{id}','recipePopController@update');
Route::get('/recipePop/delete/{id}','recipePopController@delete');
Route::get('/recipePop/cetak_pdf', 'recipePopController@cetak_pdf');

Route::get('/manageUser', 'userController@index')->name('manage');
Route::get('/user/add','userController@add');
Route::post('/user/create','userController@create');
Route::get('/user/edit/{id}','userController@edit');
Route::post('/user/update/{id}','userController@update');
Route::get('/user/delete/{id}','userController@delete');
Route::get('/user/cetak_pdf', 'userController@cetak_pdf');
