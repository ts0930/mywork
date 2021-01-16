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

Route::get('/', function() {
    return view('welcome');
});

Route::group(['prefix' =>'admin'],function(){
    Route::get('work/create','Admin\WorkController@add')->middleware('auth');
    Route::post('work/create','Admin\WorkController@create');
    
    Route::get('work', 'Admin\WorkController@index')->middleware('auth');
    
   
    
    Route::post('work/confirm', 'Admin\WorkController@confirm');
    Route::get('work/edit','Admin\WorkController@edit');
    Route::get('work/show','Admin\WorkController@work');
    Route::get('work/about.html','Admin\WorkController@index');
    Route::get('work/index.html','Admin\WorkController@index');
    Route::get('work/post.html','Admin\WorkController@index');
    Route::get('work/contact.html','Admin\WorkController@edit');
     Route::get('work/make',[
    'uses' => 'Admin\UserController@makesignin' ,  
    'as' => 'work.make']);
    
 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('admin/work/make','Admin\UserController@makesignin');

