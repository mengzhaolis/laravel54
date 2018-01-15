<?php

namespace app\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GoodsController extends CommonController
{
	//添加新商品
	public function goods_add()
	{
		return view('Goods.goods_add');
	}
	//商品规格
	public function goods_attdef()
	{
		return view('Goods.goods_attdef');
	}
	//商品属性
	public function goods_type()
	{
		return view('Goods.goods_type');
	
	}
}