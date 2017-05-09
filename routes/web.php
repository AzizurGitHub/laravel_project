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

Route::get('hello','DepertmentController@index');

//Route::get('home/{name?}',function($name=null){
//    return view('home',compact('name'));
//});

Route::get('posts',function(){
    return view('index');
});

Route::get('contact',function(){
    return view('contact');
});

Route::post('home/store','BlogPost@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('show','BlogPost@show');
Route::get('post','BlogPost@index');