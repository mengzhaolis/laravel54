<?php

	namespace App\Model;

	use Config;
	use App\Http\Controllers\Controller;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	use Illuminate\Database\Eloquent\Model;

	class Type extends Model
	{
	    public function digui($data,$pid,$level)
	    {
	        $tree = Array();
	        foreach($data as $k => $v)
	        {
	            if($v['p_id'] == $pid)
	            {
	                $v['level'] = $level;
	                 $flg = str_repeat('|―',$level);
	                 $v['good_type'] = $flg.$v['good_type'];
	                 $tree[$k] = $v;
	                // //  var_dump($tree);die;
	                 $tree[$k]['son'] = $this->digui($data,$v['id'],$level+1);
	            }
	        }
	        
	        return $tree;
	    }
	}

?>