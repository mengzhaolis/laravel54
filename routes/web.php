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
//后台首页
Route::any('/admin','Admin\IndexController@admin_index');
//个人中心模块
Route::group(['prefix'=>'/admin'],function(){
	//查看、更改用户信息
	Route::any('/usernews','Admin\AdminController@vita');
	//更改密码
	Route::any('/Cpass','Admin\AdminController@CPassword');
});
//商品管理模块
Route::group(['prefix'=>'/goods'],function(){
	Route::any('/goods_add','Admin\GoodsController@goods_add');
	Route::any('/goods_attdef','Admin\GoodsController@goods_attdef');
	Route::any('/goods_type','Admin\GoodsController@goods_type');
});
//图片管理
Route::group(['prefix'=>'/img'],function(){
	Route::any('/add','Admin\ImagesController@img_add');
});
    
//注册
Route::post('/register','RegisterController@register');
//头部
Route::any('/tou','Admin\IndexController@header');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

