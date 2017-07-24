<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //渲染分类页面
    public function type()
    {
		//查询顶级分类
        $type = DB::table('fang_type')->where("p_t_id","0")->get();
		//查询所有的分类
        $fen = DB::table('fang_type')->where("p_t_id",">",0)->get();
        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
    public function fen($id)
    {
		//查询顶级分类
        $type = DB::table('fang_type')->where("p_t_id","0")->get();
		//通过上级分类ID查询所有的小分类
        $fen = DB::table('fang_type')->where("p_t_id",$id)->get();

        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
    public function lists($id)
    {
        echo $id;die;

        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
}