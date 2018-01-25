<?php

namespace App\Model;

use Config;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Goods extends Model
{
    //商品分类数据入库(一级)
    public function goodstype_add($array)
    {
        $ret = DB::table('goods_type')->insert(['good_type' => "$array[good_type]", 'p_id' => 0]);
        // return $ret;
        if(empty($ret))
        {
            return 2;
        }else
        {
            return 1;
        }
    }
    //展示商品的一级分类
    public function type_show()
    {
        $data = DB::table('goods_type')->where('p_id','=',0)->get();
        return $data;
    }
    
}