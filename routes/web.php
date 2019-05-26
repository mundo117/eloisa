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
Route::get('/logout', 'Auth\LoginController@logout');

//TYPE USER
//Display Index Page
Route::get('/types', 'TypeUserController@index');
// Populate Data in Edit Modal Form
Route::get('/types/{UserType_id?}', 'TypeUserController@show');
//create New Product
Route::post('/types', 'TypeUserController@store');
// update Existing Product
Route::put('/types/{UserType_id}', 'TypeUserController@update');
// delete product
Route::delete('/types/{UserType_id}', 'TypeUserController@destroy');


//TYPE USER DETAIL
//Display Index Page
Route::get('/assignmenttype/{id}', 'TypeUserDetailController@index');
//create New Product
Route::put('/assignmenttype/{id}/{detailfood_id}', 'TypeUserDetailController@update');
// delete product
Route::delete('/assignmenttype/{id}/{detailfood_id}', 'TypeUserDetailController@destroy');

//USERS
//Display Index Page
Route::get('/users', 'UsersController@index');
// Populate Data in Edit Modal Form
Route::get('/users/{Users_id}', 'UsersController@show');
//create New User
Route::post('/users', 'UsersController@store');
// update Existing User
Route::put('/users/{Users_id}', 'UsersController@update');
// delete User
Route::delete('/users/{Users_id}', 'UsersController@destroy');