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
    	$info =  DB::table('fang_zhunze')->get();
    	// print_r($info);die;
        return view('home/index/index')->with(['user'=>$user,'info'=>$info]);
    }
}