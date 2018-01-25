<?php

	namespace App\Model;

	use Config;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\Hash;
	

	class Adminuser extends Model
	{
		//展示登陆用户信息
		public function user_news()
		{
			$data = DB::table('users')->where('name','=','mengmeng')->first();
			return $data;
		}
		//更改登陆用户的信息
		public function user_change($array)
		{
			if(empty($array))
			{
				return 2;
			}else
			{
				$ret = DB::table('users')->where('name','=','mengmeng')->update(['email'=>$array['email'],'name'=>$array['name'],'miaoshu'=>$array['miaoshu']]);
				if(empty($ret))
				{
					return 2;
				}else
				{

					return 1;
				}
			}
		}
		//更改用户密码
		public function passchange($data)
		{
			$ret = DB::table('users')->where('name','=','mengmeng')->update(['password'=>bcrypt($data['password'])]);
			if(empty($ret))
			{
				return 2;
			}else
			{

				return 1;
			}
		}
	}
    