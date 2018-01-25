<?php
/*
 * @Author: DingBing 
 * @Date: 2017-12-14 19:49:06 
 * @Last Modified by: DingBing
 * @Last Modified time: 2017-12-14 19:57:20
 */

namespace App\Http\Controllers\Admin;
use Config;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;

class CommonController extends Controller
{
    //未登陆用户不能访问
   public function __construct(){
        $this->middleware('auth');
    }

}