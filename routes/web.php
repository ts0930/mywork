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
    Route::get('work/create','Admin\WorkController@create')->middleware('auth');
    Route::post('work/store','Admin\WorkController@store');
    
    Route::get('work', 'Admin\WorkController@index')->middleware('auth');
   
    
    Route::get('/','Admin\WorkController@showList');
    
    Route::get('/work/{id}','Admin\WorkController@showDetail');
    
    Route::get('/work/edit/{id}','Admin\WorkController@edit')->name('admin.work.edit');
    Route::post('/work/update','Admin\WorkController@update'); 
    
    Route::post('/work/delete/{id}','Admin\WorkController@delete')->name('delete');
  
  
    Route::post('work/confirm', 'Admin\WorkController@confirm');
    Route::get('work/edit','Admin\WorkController@edit');
    Route::get('work/show','Admin\WorkController@work');
    Route::get('work/about.html','Admin\WorkController@add');
 
   
     Route::get('work/make',[
    'uses' => 'Admin\UserController@makesignin' ,  
    'as' => 'work.make']);
    
 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('admin/work/make','Admin\UserController@makesignin');

