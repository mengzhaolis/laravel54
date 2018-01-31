<?php

namespace app\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Goods;
use App\Model\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GoodsController extends CommonController
{
	
	//添加新商品
	public function goods_add(Request $request)
	{
		if(empty($request->input()))
		{
			$data = DB::table('goods_type')->where('status','=',1)->get();
			$data = json_decode(json_encode($data),true);
			$ret = (new Type())->digui($data,0,0);
			// var_dump($ret);die;	
			return view('Goods.goods_add',['data'=>$ret]);
		}else
		{
			$data = $request->input();
			$data = $request->except('_token','file');
			var_dump($data);die;
			$id = DB::table('goods')->insertGetId($data);

		}
		
	}
	//商品规格
	public function goods_attdef()
	{
		return view('Goods.goods_attdef');
	}
	//商品属性
	public function goods_type(Request $request)
	{
		if(empty($request->input()))
		{
			$data = (new Goods())->type_show();
			if(empty($data))
			{
				return view('Goods.goods_type');
			}else
			{
				return view('Goods.goods_type',['onetype'=>$data]);
			}
			
		}else
		{
			$array = $request->input();
			
			$ret = (new Goods())->goodstype_add($array);
			if($ret == 1)
			{
				return \App\Tools\ajax_succeed();
			}else if($ret == 2)
			{
				return \App\Tools\ajax_error();
			}
		}
		
	
	}
	//添加商品二级分类
	public function goods_type2(Request $request)
	{
		$data = $request->input();
		// var_dump($data['good_types']);die;
		$double = DB::table('goods_type')->where('good_type','=',"$data[good_types]")->where('p_id','=',"$data[p_id]")->first();
		if(!empty($double))
		{
			return \App\Tools\ajax_news();
		}else
		{
			$id = DB::table('goods_type')->insert(['good_type'=>"$data[good_types]",'p_id'=>"$data[p_id]"]);
			if(empty($id))
			{
				return \App\Tools\ajax_error();
			}else
			{
				return \App\Tools\ajax_succeed();
			}
		}
		
	}
}