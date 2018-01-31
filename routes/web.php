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

	//用户登陆
	Route::any('/login','Auth\LoginController@login');
	//管理员退出
	Route::any('/logout','Auth\LoginController@logout');

//个人中心模块
Route::group(['prefix'=>'/admin'],function(){
	//查看、更改用户信息
	Route::any('/usernews','Admin\AdminController@vita');
	//更改密码
	Route::any('/Cpass','Admin\AdminController@CPassword');
	
});
//商品管理模块
Route::group(['prefix'=>'/goods'],function(){
	//商品添加
	Route::any('/goods_add','Admin\GoodsController@goods_add');
	//商品规格
	Route::any('/goods_attdef','Admin\GoodsController@goods_attdef');
	//商品类别
	Route::any('/goods_type','Admin\GoodsController@goods_type');
	//二级类
	Route::any('/goods_type2','Admin\GoodsController@goods_type2');
});
//图片管理

Route::any('/img/add','Admin\ImagesController@img_add');
//商品详情图
Route::any('/goods_img/add','Admin\ImagesController@goods_img_add');
//商品封图
Route::any('/goods_img_face','Admin\ImagesController@goods_img_face');

    
//注册
Route::post('/register','RegisterController@register');
//头部
Route::any('/tou','Admin\IndexController@header');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

