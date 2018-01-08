<?php

namespace app\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Type;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{
	//显示首页
	public function admin_index()
	{
		return view('Admin.Userpassword');
	}
	public function add()
	{
		return \App\Tools\ajax_succeed();
	}
	public function header()
	{
		return view('common.header');
	}
	public function index()
	{
		return view('Admin.Index');
	}
}
	


?>