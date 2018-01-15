<?php

	namespace App\Model;

	use Config;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use Illuminate\Database\Eloquent\Model;

	class Adminuser extends Model
	{
		public function user_news()
		{
			$data = DB::table('users')->where('name','=','mengmeng')->first();
			return $data;
		}
	}
    