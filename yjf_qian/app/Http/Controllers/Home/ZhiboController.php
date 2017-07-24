<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZhiboController extends Controller
{
    public function zhibo()
    {
        $zb = DB::table('fang_zaixian');
        $user = $zb
            ->join('fang_zhubo', 'fang_zaixian.z_id', '=', 'fang_zhubo.z_id')
            ->join('fang_type', 'fang_zaixian.t_id', '=', 'fang_type.t_id')
            ->join('fang_xinxi', 'fang_zhubo.u_id', '=', 'fang_xinxi.u_id')
            ->where("fang_zaixian.is_zhibo",1)
            ->get();
        return view('home/zhibo/zhibo',['data'=>$user]);
    }

    public function lists($id)
    {
        $zb = DB::table('fang_zaixian');
        $user = $zb
            ->join('fang_zhubo', 'fang_zaixian.z_id', '=', 'fang_zhubo.z_id')
            ->join('fang_type', 'fang_zaixian.t_id', '=', 'fang_type.t_id')
            ->join('fang_xinxi', 'fang_zhubo.u_id', '=', 'fang_xinxi.u_id')
            ->where("fang_zaixian.is_zhibo",1)
            ->where("fang_zaixian.t_id",$id)
            ->get();
        return view('home/zhibo/zhibo',['data'=>$user]);
    }
}