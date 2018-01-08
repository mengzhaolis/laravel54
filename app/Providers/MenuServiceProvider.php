<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Type;
use DB;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        view()->composer('common._left', function ($view) { 
            $data=DB::table('left_config')->where(['status'=>1])->get();
            $data=json_decode(json_encode($data),true);
            $arr=(new Type())->digui($data,0,0);
            $view->with('left_tree',$arr);
        });
    }
}
