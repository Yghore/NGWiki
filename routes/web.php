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
})->name('home');

Route::get('article', 'PageController@view')->name('article');

Route::get('category', 'CategoryController@view')->name('category');


Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('/test', function ($id) {
    return view('index');
    })->middleware('permission.manager');



Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'wiki'], function () {
        Route::get('/pages/list/', function () {
            return view('admin.wiki.pages');
        })->name('admin.pages');
        Route::get('/pages/sommaire/', function () {
            return view('admin.wiki.sommaire');
        })->name('admin.sommaire');
        Route::get('/pages/edit/', function () {
            return view('admin.wiki.edit')->with('content', "");
        })->name('admin.page.edit');
        
        Route::get('/pages/add/', function () {
            return view('admin.wiki.add_page');
        })->name('admin.page.add');

        Route::get('/modify/', function () {
            return view('admin.wiki.modify');
        })->name('admin.modify');
        Route::get('/modify/view', function () {
            return view('admin.wiki.view');
        })->name('admin.modify.view');
    
        Route::get('/category', function () {
            return view('admin.wiki.category');
        })->name('admin.category');
    
        Route::get('/category/edit', function () {
            return view('admin.wiki.edit_category');
        })->name('admin.category.edit');
        
        
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/list', function () {
            return view('admin.user.list');
        })->name('admin.user.list');


        Route::get('/edit', function () {
            return view('admin.user.edit');
        })->name('admin.user.edit');

    });
     Route::get('/', function () {
        return view('admin.dashboard');
    });
   


});