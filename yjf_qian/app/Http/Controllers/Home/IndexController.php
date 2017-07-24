<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
       $user= DB::table('fang_zaixian')->limit(4)->get(); //网游竞技
    	// print_r($user);die;
    	$info =  DB::table('fang_zhunze')->get();  //公会准则
    	$fenlei =  DB::table('fang_type')->where("t_id",">",4)->orderby('add_time')->limit(10)->get();//热门分类
    	// $fenlei['count'] = DB::table('fang_type')->count();
    	// print_r($fenlei);die;
        return view('home/index/index')->with(['user'=>$user,'info'=>$info,'fenlei'=>$fenlei]);
    }
}