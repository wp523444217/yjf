<?php



Route::get('/', 'Home\IndexController@index');
Route::group(['namespace'=> 'Home'],function(){
	//首页
	 Route::get('/', [
        'as' => 'index', 'uses' => 'IndexController@index'
    ]);
     //顶级分类
     Route::get('/type','TypeController@type');
    //二级分类
     Route::get('/fen/{id}','TypeController@fen');
     //直播首页
     Route::get('/zb','ZhiboController@zhibo');
     Route::get('/lists/{id}','ZhiboController@lists');
	 //首页直播页面
	 Route::get('/live','LiveController@index');
	 //登录
	 Route::get('/login/{username}/{pwd}/{csrf}','LoginController@login');
	 //注册
	 Route::get('/loginadd/{username}/{pwd}/{csrf}','LoginController@loginadd');
	 //退出登录
	 Route::get('/del','LoginController@del');
	 //个人中心
	 Route::get('/per','ZhuController@index');
	 //我的消息
	 Route::get('/msg','ZhuController@msg');
	 //个人财产
	 Route::get('/money','ZhuController@money');
	 //个人福利
	 Route::get('/fu','ZhuController@fuli');
	 //成为主播
	 Route::get('/go','ZhuController@go');
	 //订阅与查看历史
	 Route::get('/sub','ZhuController@sub');
	 Route::get('/ass','ZhuController@ass');
	});
	// 引导用户到新浪微博的登录授权页面
	 Route::get('auth/weibo', 'Auth\AuthController@weibo');
	 // 用户授权后新浪微博回调的页面
	 Route::get('auth/callback', 'Auth\AuthController@callback');