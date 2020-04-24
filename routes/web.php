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



Route::view('/{path?}', 'app');

Auth::routes();

Route::get('/accounts/login', function () {
    return view('auth/login');
});

Route::get('/account/dashboard', 'HomeController@index')->middleware('auth.basic');
Route::get('/account/branches', 'BranchController@index')->middleware('auth.basic');
Route::post('/account/branches/store', 'BranchController@store')->middleware('auth.basic');
Route::post('/account/branches/update', 'BranchController@update')->middleware('auth.basic');
Route::post('/account/branches/delete', 'BranchController@delete')->middleware('auth.basic');


Route::get('/account/products', 'ProductController@index')->middleware('auth.basic');
Route::post('/account/products/create', 'ProductController@create')->middleware('auth.basic');
Route::post('/account/products/delete', 'ProductController@delete')->middleware('auth.basic');
Route::post('/account/products/update', 'ProductController@update')->middleware('auth.basic');

// Route::get('/account/dashboard', function () {
//     return view('account/dashboard');
// });
