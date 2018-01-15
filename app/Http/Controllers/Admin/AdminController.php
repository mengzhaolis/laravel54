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
			$data = (new Adminuser())->user_news();
			// var_dump($data);die;
			return view('Admin.Personage',['usernews'=>$data]);
		}else
		{

		}
		
	}
	//更改密码
	public function CPassword()
	{
		return view('Admin.Cpassword');
	}
}