<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class UserController extends CommonController
{
	//引用头部
    public $layout = "header";
    /**
     * @inheritdoc
     */
    //后台用户展示
    public function actionShow()
    {
    	$db=Yii::$app->db;
    	$sql="select * from fang_user";
    	$charaSql="select * from fang_userchara as uc right join fang_chara as c  on uc.c_id=c.c_id";
    	$data=$db->createCommand($sql)->queryAll();
    	$chara=$db->createCommand($charaSql)->queryAll();
    	foreach($data as $k=>$v){
    		$v["pwd"]="*******";
    		$v["chara"]="";
    		foreach($chara as $ks=>$vs){
    			if($v["u_id"] == $vs["u_id"]){
    				$v["chara"].=$vs["c_name"]."，";
    			}
    		}
    		$v["chara"]=trim($v["chara"],"，");
    		$data[$k]=$v;
    	}
    	// var_dump($data);die;
        return $this->render("show",["data"=>$data]);
    }
    //后台个人详细信息
    public function actionUserinfo($id){
    	$db=Yii::$app->db;
        $userSql="select * from fang_user as u join fang_xinxi as x on u.u_id=x.u_id where u.u_id={$id}";
        $user=$db->createCommand($userSql)->queryOne();
        $user["pwd"]="*******";
        $user["chara"]="";
    	$charaSql="select * from fang_userchara as uc right join fang_chara as c  on uc.c_id=c.c_id where u_id={$id}";
        $chara=$db->createCommand($charaSql)->queryAll();
        $userthor=array();
        foreach($chara as $k=>$v){
            $user["chara"].=$v["c_name"]."，";
            $thorSql="select * from fang_charathor as uc left join fang_thority as t on uc.t_id=t.t_id where c_id={$v["c_id"]}";
            $thor=$db->createCommand($thorSql)->queryAll();
            foreach($thor as $ks=>$vs){
                $userthor[$vs["t_id"]]=$vs["t_name"];
            }
        }
        $user["chara"]=trim($user["chara"],"，");
        $user["thority"]=implode($userthor,"，");
        // var_dump($user);die;
    	return $this->render("userinfo",["user"=>$user]);
    }


}
