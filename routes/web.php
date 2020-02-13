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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// user
Route::get('/dashboard-user', 'User\DashboardUserController@index');
Route::get('/profil-user', 'User\ProfilUserController@index');
Route::get('/makanan-user', 'User\MakananController@index');
Route::get('/makanan-user/detail-pesan', 'User\MakananController@show');
// admin
Route::get('/dashboard-admin', 'Admin\DashboardAdminController@index');
Route::get('/user-admin', 'Admin\UserController@index');
Route::get('/user-admin/tambah-user', 'Admin\UserController@create')->name('tambah-user');
Route::get('/user-admin/edit-user', 'Admin\UserController@edit')->name('edit-user');
Route::get('/makanan-admin', 'Admin\FoodController@index');
Route::get('/makanan-admin/tambah-makanan', 'Admin\FoodController@create');