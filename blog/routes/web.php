<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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


//Route::get('/', [FrontendController::class, 'index']);
Route::get('/','FrontendController@index');
Route::get('/blog/{id}','FrontendController@show');
Route::get('/category/{id}','FrontendController@category');

Route::get('/contact','FrontendController@contact');
Route::get('/categories/list','CategoryController@index')->name('categories'); //if client wants another name in url
Route::post('/categories/list','CategoryController@store')->name('categories.store');


//resourceful articles
Route::resource('/articles','ArticleController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
