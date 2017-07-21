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
        $type = DB::table('fang_type');
        $type = DB::table('fang_type')->where("p_t_id","0")->get();
        $fen = DB::table('fang_type');
        $fen = DB::table('fang_type')->where("p_t_id",">",0)->get();
        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
    public function fen($id)
    {

        $type = DB::table('fang_type');
        $type = DB::table('fang_type')->where("p_t_id","0")->get();

        $fen = DB::table('fang_type');
        $fen = DB::table('fang_type')->where("p_t_id",$id)->get();

        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
    public function lists($id)
    {
        echo $id;die;

        return view('home/type/type',['fen'=>$fen,'type'=>$type]);
    }
}