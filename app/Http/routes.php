<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes

|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'manage', 'middleware' => 'web', 'namespace' => 'Manage'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');    //控制面板
    Route::resource('module', 'ModuleController');  //模块管理
});

Route::get('tt', function(){
    return view('manage.module.edit');
});

Route::resource('test', 'Manage\TestController');

//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});