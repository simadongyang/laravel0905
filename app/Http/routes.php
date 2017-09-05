<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
/*Route::group(['middleware' => 'OldMiddleware'],function(){
	Route::get('test',function(){
		dd('this is test');
	});
});*/
Route::group(['middleware' => 'Old'], function () {
    Route::get('test/{age}', function () {
		dd('this is test');

    });

    Route::get('user/profile', function () {
        // 使用 Auth 中间件
    });
});
//路由参数-必选参数
/*Route:get('home/{id}/comments/{comment}',function($id,$comment){
	echo  "User=".$id.'-----comment='.$comment;die;
});
//可选参数
Route::get('home/{name?}',function($name = 'null'){
	dd('name = '.$name);
});*/
/*//正则约束
Route::get('home/{name}',function($name){
	dd('name = '.$name);
})->where('name','[A-Za-z]');*/
/*//路由组
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // 路由被命名为 "admin::dashboard"
        dd('路由被命名为 "admin::dashboard"');
    }]);
});*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
