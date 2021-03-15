<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('article/{slug}', 'PageController@view')->name('article');

Route::get('category', 'CategoryController@view')->name('category');

Route::get('test', function () {
    return view('test');
});

Route::get('login', 'LoginController@view')->name('login.view');
Route::post('login', 'LoginController@authenticate')->name('login.authenticate');


// Route::get('/test', function () {
//     return view('test');
//     })->middleware('permission.manager:ADMIN_VIEW');


Route::middleware(['permission.manager:ADMIN_VIEW'])->group(function () {

    Route::group(['prefix' => 'admin'], function () {

        Route::group(['prefix' => 'wiki'], function () {

            Route::get('/pages/list/', function () {
                return view('admin.wiki.pages');
            })->name('admin.pages')->middleware(['permission.manager:PAGE_EDIT']);


            Route::get('/pages/sommaire/', function () {
                return view('admin.wiki.sommaire');
            })->name('admin.sommaire')->middleware(['permission.manager:CATEGORY_MANAGE']);


            Route::get('/pages/edit/', function () {
                return view('admin.wiki.edit')->with('content', "");
            })->name('admin.page.edit')->middleware(['permission.manager:PAGE_EDIT']);


            
            Route::get('/pages/add/', 'Admin\PageController@view')->name('admin.page.add')->middleware(['permission.manager:PAGE_ADD']);



            Route::get('/modify/', function () {
                return view('admin.wiki.modify');
            })->name('admin.modify')->middleware(['permission.manager:PAGE_EDIT']);



            Route::get('/modify/view', function () {
                return view('admin.wiki.view');
            })->name('admin.modify.view')->middleware(['permission.manager:PAGE_EDIT']);


            Route::get('/category', function () {
                return view('admin.wiki.category');
            })->name('admin.category')->middleware(['permission.manager:CATEGORY_MANAGE']);

        

            Route::get('/category/edit', function () {
                return view('admin.wiki.edit_category');
            })->name('admin.category.edit')->middleware(['permission.manager:CATEGORY_MANAGE']);

            
            
        });

        Route::group(['prefix' => 'user'], function () {
            Route::get('/list', function () {
                return view('admin.user.list');
            })->name('admin.user.list')->middleware(['permission.manager:USER_VIEW']);


            Route::get('/edit', function () {
                return view('admin.user.edit');
            })->name('admin.user.edit')->middleware(['permission.manager:USER_EDIT']);

        });
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard')->middleware(['permission.manager:ADMIN_VIEW']);
   
    });

});