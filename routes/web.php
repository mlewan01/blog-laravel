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

/*
Route::get('/hello', function () {
//    return view('welcome');
    return "lara test";
});

Route::get('/view', function() {
    return view('pages.about');
    return view('pages/about');
});

Route::get('/user/{id}/{name}', function($id, $name){
    return 'This is user '. $name . ' with an id ' . $id;
});
*/
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
