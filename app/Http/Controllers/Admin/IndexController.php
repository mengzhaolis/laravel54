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
		return view('Admin.Index');
	}
}
	


?>