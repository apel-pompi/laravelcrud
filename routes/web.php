<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/user/{id}/{name}', function ($id,$name) {
//     return 'This is user '.$id.'And Name is: '.$name;
// });

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/service', 'App\Http\Controllers\PagesController@service');

Route::resource('posts', 'App\Http\Controllers\PostsController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
