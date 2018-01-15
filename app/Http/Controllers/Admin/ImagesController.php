<?php

namespace App\Http\Controllers\Admin;

use Config;
use App\Http\Controllers\Admin\CommonController;
use App\Model\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ImagesController extends CommonController
{
	//图片添加
    public function img_add()
    {
        return view('Img.img_add');
    }
	
}