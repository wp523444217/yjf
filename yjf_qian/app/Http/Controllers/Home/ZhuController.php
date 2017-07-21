<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZhuController extends Controller
{
	//个人中心
    public function index()
    {
        $username = "admin";
        $userdb = DB::table('fang_user');
        $user = $userdb
        ->join('fang_xinxi', 'fang_user.u_id', '=', 'fang_xinxi.u_id')
        ->join('fang_zhubo', 'fang_user.u_id', '=', 'fang_zhubo.z_id')
        ->where("fang_user.username",$username)
        ->first();
        // echo $user->username;
        // var_dump($user);die;
    	return view('home/zhu/index')
        ->with(["user"=>$user]);
    }
    //我的消息
    public function msg() {
    	return view('home/zhu/wodexiaoxi');
    }
    //我的财产
    public function money() {
    	return view('home/zhu/wodejiangpin');
    }
    //我的福利
    public function fuli() {
    	return view('home/zhu/wodefuli');
    }
    //成为主播
    public function go() {
    	return view('home/zhu/cwzhubo');
    }
    //订阅与查看历史
    public function sub() {
    	return view('home/zhu/dingyuelishi');
    }
   
    //认证教程@todo 没路由
    public function asd() {
    	return view('home/zhu/renzhengjiaocheng');
    }

     //@todo
    public function ass() {
    	return view('home/zhu/ruhechengzhang');
    }

}