<?php

namespace App\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ImagesController extends CommonController
{
	//图片添加
    public function img_add(Request $request)
    {
        if(empty($request->file()))
        {
            return view('Img.img_add');
        }else
        {
            // var_dump($request->file('image'));die;
            $path = $request->file('image')->store('public');
            if(empty($path))
            {
                return \App\Tools\ajax_error();
            }else
            {
                // return Storage::url($path);\
                $old_img = DB::table('users')->where('name','=','mengmeng')->first();
                // return $old_img;
                if(empty($old_img->head_img))
                {
                    $id = DB::table('users')->where('name','=','mengmeng')->update(['head_img'=>Storage::url($path)]);
                    if(empty($id))
                    {
                        return \App\Tools\ajax_error();
                    }else
                    {
                        Session::put('head_img',Storage::url($path));
                        
                        // return Session::get('head_img');
                        return \App\Tools\ajax_succeed();
                    }
                }else
                {
                    Storage::delete("$old_img->head_img");
                    $id = DB::table('users')->where('name','=','mengmeng')->update(['head_img'=>Storage::url($path)]);
                    if(empty($id))
                    {
                        return \App\Tools\ajax_error();
                    }else
                    {
                        Session::put('head_img',Storage::url($path));
                        
                        // return Session::get('head_img');
                        return \App\Tools\ajax_succeed();
                    }
                }
                
                
            }
            // return $path;
        }
        
    }
	//商品图片添加(多图片)
    public function goods_img_add(Request $request)
    {
        $path = $request->file('file')->store('public');
        $id = DB::table('goods_img')->insertGetId(['img_path'=>Storage::url($path)]);
        // var_dump($id);die;
        // $img_path = implode(',',$id);
        // $path = array('path'=>$img_path);
        return $id;
    }
    //商品封面图
    public function goods_img_face(Request $request)
    {
        $path = $request->file('image')->store('public');
        $id = DB::table('goods_img')->insertGetId(['img_path'=>Storage::url($path)]);
        return $id;
    }
}