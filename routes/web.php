<?php

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
    return view('index');
});

Route::get('article', function () {
    return view('article');
});

Route::get('category', function () {
    return view('category');
});


Route::get('login', function () {
    return view('login');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::post('test', 'AdminController@test');
});