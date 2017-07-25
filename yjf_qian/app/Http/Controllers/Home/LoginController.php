<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    //首页登录
    public function login($username='',$pwd='',$csrf='')
    {
    	$session = new session(); 
		$name=$session->get("username");
    	if($name == ""){
	    	$userdb = DB::table('fang_user');
	    	$user = $userdb
		    	->where("fang_user.username",$username)
		        ->first();
	        $info=array();
	        if($user){
	        	if(md5($pwd) == $user->pwd){
	        		$session->set("username",$username);
	        		$xinxidb = DB::table('fang_xinxi');
	        		$xinxi=$xinxidb->where("fang_xinxi.u_id",$user->u_id)->first();
	        		$info["username"]=$user->username;
	        		$info["img"]=$xinxi->u_img;
	        		$info["jin_d"]=$xinxi->jin_d;
	        		$info["jin_d_j"]=$xinxi->jin_d_j;
	        		$info["yin_d"]=$xinxi->yin_d;
	        		$session->set("info",json_encode($info,JSON_UNESCAPED_UNICODE));
	        		$info["msgs"]="登陆成功";	        		
	        	}else{
					$info["msgs"]="密码错误";
	        	}
	        }else{
	        	$info["msgs"]="用户名错误";
	        }
	       echo json_encode($info,JSON_UNESCAPED_UNICODE);die;
       }else{
       	$info=array();
       	$userdb = DB::table('fang_user');
	    	$user = $userdb
		    	->where("fang_user.username",$username)
		        ->first();
	        $xinxidb = DB::table('fang_xinxi');
    		$xinxi=$xinxidb->where("fang_xinxi.u_id",$user->u_id)->first();
    		$info["username"]=$user->username;
    		$info["img"]=$xinxi->u_img;
    		$info["jin_d"]=$xinxi->jin_d;
    		$info["jin_d_j"]=$xinxi->jin_d_j;
    		$info["yin_d"]=$xinxi->yin_d;
       		$info["msgs"]="已登录";
       }
        echo json_encode($info,JSON_UNESCAPED_UNICODE);die;
    }
    //直播间
    public function room() {

    	return view('home/live/room');
    }
    //注册
    public function loginadd($username='',$pwd='',$csrf=''){
    	$session = new session();
    	$userdb = DB::table('fang_user');
    	$xinxidb = DB::table('fang_xinxi');
    	$u_id=$userdb->insertGetId(['username'=>$username,'pwd'=>$pwd,"add_time"=>date("Y-m-d H:i:s")]);
    	$info=array();
    	if($u_id){
    		$xinxi_id=$xinxidb->insertGetId(["u_id"=>$u_id,"u_img"=>'http://screenshot.dwstatic.com/yysnapshot/17e293714b28d484f5790b911f97bf3134420255?imageview/4/0/w/136/h/76/blur/1',"jin_d"=>0,"jin_d_j"=>0,"yin_d"=>0]);
    		if($xinxi_id){
    			$info["username"]=$username;
				$info["img"]="http://screenshot.dwstatic.com/yysnapshot/17e293714b28d484f5790b911f97bf3134420255?imageview/4/0/w/136/h/76/blur/1";
				$info["jin_d"]=0;
				$info["jin_d_j"]=0;
				$info["yin_d"]=0;
		   		$info["msgs"]="注册成功";
		   		$session->set("username",$username);
		   		$session->set("info",json_encode($info,JSON_UNESCAPED_UNICODE));
    		}else{
    			$userdb->where('u_id',$u_id)->delete();
    			$info["msgs"]="注册失败";
    		}
    	}else{
    		$info["msgs"]="注册失败";
    	}
   		echo json_encode($info,JSON_UNESCAPED_UNICODE);die;

    }
    //退出登录
    public function del(){
    	
    }
}