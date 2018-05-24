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
 // Event::listen('illuminate.query',function($query){
 // 	var_dump($query);
 // });
Route::get('/', function () {
    return view('welcome',['website'=>'laravel symfony']);
});
Route::get('hello', function () {
    return view('form');
});

Auth::routes();
Route::group([],function(){


	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('abc/{id}',function($id){
		abort(404);
	});
	Route::get('/login',function(){
		return "这里是登录界面";
	});
	// Route::get('/setting',[
	// 	'middleware' => 'login',
	// 	'uses' => function(){
	// 		echo 'setting';
	// 	}
	// 	]);

	Route::get('session',function(){
		session(["uid"=>10]);
	});
	Route::get('/setting',function(){
		echo "这里是网址后台页面";
	})->middleware('login');
	Route::get('logout',function(){
		session(["uid"=>0]);
	});
});
//用户请求服务器的/controller ,访问UserContrller的show方法
Route::get('/controller','UserController@show');

//用户修改
Route::get('/admin/user/edit/{id}',[
	'as' => 'udelete',
	'uses' => 'UserController@edit2'
	]);
Route::get('/edit/{id}','Admin\UserController@show');
Route::get('/shengji/{id}',[
	'middleware' => 'login',
	'uses' => 'UserController@shengji'
	]);
 Route::resource('goods','GoodsController');

Route::apiResource('goo', 'GoodsController');

Route::get('/request','UserController@qingqiu');

Route::get('form','UserController@form');
Route::get('insert','UserController@insert');
Route::get('/cookie','UserController@cookie');

Route::get('/page','UserController@page');
Route::get('/cart','UserController@cart');

Route::get('/layout','UserController@layout');
Route::get('/extend','UserController@extend');

//流程控制
Route::get('/liucheng','UserController@liucheng');

Route::get('/db','UserController@db');

Route::get('/func','UserController@func');
Route::get('/model','UserController@model');


Route::get('/angular',function(){
	return view('index');
});
