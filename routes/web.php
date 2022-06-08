<?php

use App\Http\Controllers\BrandController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Default User

Route::get('/home', 'HomeController@index')->name('home');

//Default



Route::get('/brands', 'BrandController@index');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/brands/create', 'BrandController@create');
    });
    Route::post('/brands', 'BrandController@store');
    Route::get('/brands/{brand}/edit', 'BrandController@edit');
    Route::put('/brands/{brand}', 'BrandController@update');
    Route::delete('/brands/{brand}', 'BrandController@destroy');
    Route::get('/brandsDelete', 'BrandController@destroyAll');
   });

   Route::get('brands/export/', [BrandController::class, 'export']);

   Route::get('/brands/{brand}', 'BrandController@show');


Route::get('/cars/create', 'CarController@create');
Route::post('/cars', 'CarController@store');
Route::get('/cars', 'CarController@index');
Route::get('/cars/{car}', 'CarController@show');
Route::get('/cars/{car}/edit', 'CarController@edit');
Route::put('/cars/{car}', 'CarController@update');
Route::delete('/cars/{car}', 'CarController@destroy');
Route::get('/carsDelete', 'CarController@destroyAll');
