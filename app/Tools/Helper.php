<?php
	namespace app\Tools;
//自定义异常类

/*
*ajax请求类
*请求成功
*/
	function ajax_succeed()
	{
		return ['status'=>\Config::get('constants.status_success'),'message'=>trans('common.request_successful')];
	}
//请求失败
	function ajax_error()
	{
		return ['status'=>\Config::get('constants.status_error'),'message'=>trans('common.request_field')];
	}
	//参数错误
	function ajax_news()
	{
		return ['status'=>\Config::get('constants.status_danger'),'message'=>trans('common.request_field')];
	}

?>