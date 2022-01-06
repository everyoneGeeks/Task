<?php

use Illuminate\Support\Facades\Route;




Route::middleware(['Supervisor'])->group(function () {


  /*
  |--------------------------------------------------------------------------
  | categories Section
  |--------------------------------------------------------------------------
  | this will handle all categories part
  */
  Route::get('/categories','CategoryController@list')->name('categories');
  Route::get('/category/info/{id}','CategoryController@info')->name('category.info')->where('id', '[0-9]+');
  Route::get('/category/status/{id}','CategoryController@status')->name('category.status')->where('id', '[0-9]+');
  Route::get('/category/edit/{id}','CategoryController@formEdit')->name('category.edit')->where('id', '[0-9]+');
  Route::post('/category/edit/{id}','CategoryController@submitEdit')->name('category.edit.submit')->where('id', '[0-9]+');
  Route::get('/category/add','CategoryController@formAdd')->name('category.add');
  Route::post('/category/add','CategoryController@submitAdd')->name('category.add.submit');
  Route::get('/category/delete','CategoryController@delete')->name('category.delete');
  #----------------------------------------------------------------------------------



  /*
  |--------------------------------------------------------------------------
  | products Section
  |--------------------------------------------------------------------------
  | this will handle all products part
  */
  Route::get('/products','ProductController@list')->name('products');
  Route::get('/product/info/{id}','ProductController@info')->name('product.info')->where('id', '[0-9]+');
  Route::get('/product/status/{id}','ProductController@status')->name('product.status')->where('id', '[0-9]+');
  Route::get('/product/edit/{id}','ProductController@formEdit')->name('product.edit')->where('id', '[0-9]+');
  Route::post('/product/edit/{id}','ProductController@submitEdit')->name('product.edit.submit')->where('id', '[0-9]+');
  Route::get('/product/add','ProductController@formAdd')->name('product.add');
  Route::post('/product/add','ProductController@submitAdd')->name('product.add.submit');
  Route::get('/product/delete/{id}','ProductController@delete')->name('product.delete');
  Route::get('/product/image/delete/{id}','ProductController@deleteProductImage')->name('product.delete');
  #----------------------------------------------------------------------------------

});



Route::middleware(['Admin'])->group(function () {
  /*
  |--------------------------------------------------------------------------
  | Supervisor Section
  |--------------------------------------------------------------------------
  | this will handle all Supervisor part
  */
  Route::get('/supervisors','SupervisorController@list')->name('supervisors');
  Route::get('/supervisor/info/{id}','SupervisorController@info')->name('supervisor.info')->where('id', '[0-9]+');
  Route::get('/supervisor/status/{id}','SupervisorController@status')->name('supervisor.status')->where('id', '[0-9]+');
  Route::get('/supervisor/edit/{id}','SupervisorController@formEdit')->name('supervisor.edit')->where('id', '[0-9]+');
  Route::post('/supervisor/edit/{id}','SupervisorController@submitEdit')->name('supervisor.edit.submit')->where('id', '[0-9]+');
  Route::get('/supervisor/add','SupervisorController@formAdd')->name('supervisor.add');
  Route::post('/supervisor/add','SupervisorController@submitAdd')->name('supervisor.add.submit');
  Route::get('/supervisor/delete','SupervisorController@delete')->name('supervisor.delete');
  #----------------------------------------------------------------------------------

});


Route::get('/', 'HomeController@index')->name('index');

Route::get('/login', 'AdminLoginController@showLoginForm')->name('login');

Route::get('/admin/login', 'AdminLoginController@showLoginForm')->name('admin.form.login');
Route::post('/admin/login', 'AdminLoginController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');


Route::get('/supervisor/login', 'SupervisorLoginController@showLoginForm')->name('supervisor.form.login');
Route::post('/supervisor/login', 'SupervisorLoginController@login')->name('supervisor.login');
Route::get('/supervisor/logout', 'SupervisorLoginController@logout')->name('supervisor.logout');
