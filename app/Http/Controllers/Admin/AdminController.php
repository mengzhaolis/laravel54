<?php

namespace app\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Adminuser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends CommonController
{
	
	//查看、更改个人信息
	public function vita(Request $request)
	{
		if(empty($request->input()))
		{
			//查看用户的信息
			$data = (new Adminuser())->user_news();
			// var_dump($data);die;
			return view('Admin.Personage',['usernews'=>$data]);
		}else
		{
			//执行更改
			$array = $request->input();
			// var_dump($array);die;
			$id = (new Adminuser())->user_change($array);
			if($id==1)
			{
				return \App\Tools\ajax_succeed();
			}else if($id==2)
			{
				return \App\Tools\ajax_error();
			}
		}
		
	}
	//更改密码
	public function CPassword(Request $request)
	{
		if(empty($request->input()))
		{
			return view('Admin.Cpassword');
		}else
		{
			$data = $request->input();
			// return $data;
			$id = (new Adminuser())->passchange($data);
			if($id==2)
			{
				return \App\Tools\ajax_error();
			}else if($id ==1)
			{
				return \App\Tools\ajax_succeed();
			}
		}
		
	}
}