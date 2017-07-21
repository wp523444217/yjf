<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use frontend\models\User;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class CommonController extends Controller
{
    public $enableCsrfValidation = false;
    //引用头部
    public $layout = "header";

    public function init()
    {
        parent::init();
        if(empty(Yii::$app->session['username'])){
            echo "<script>alert('请先登录');location.href='?r=login/login';</script>";
        }
//        $this->rbac();

    }
    //权限控制
    public function rbac()
    {
        $url=$this->module->requestedRoute;
        if($url=="index/index" || $url==""){
            return true;
        }
        $arr=explode("/",$url);
        $db=Yii::$app->db;
        // $username=Yii::$app->session['username'];
        $username="admin";
        $sql="select u_id from fang_user where username='{$username}'";
        $id=$db->createCommand($sql)->queryOne();
        $charaSql="select c_id from fang_userchara where u_id={$id["u_id"]}";
        $charaId=$db->createCommand($charaSql)->queryAll();
        $mythor=array();
        foreach($charaId as $k=>$v){
            $thorSql="select t.t_id,controller,action from fang_charathor as ct join fang_thority as t on ct.t_id=t.t_id where ct.c_id={$v["c_id"]}";
            $thorId=$db->createCommand($thorSql)->queryAll();
            foreach($thorId as $ks=>$vs){
                $mythor[$vs["t_id"]]=$vs;
            }
        }
        foreach($mythor as $k=>$v){
            if($v["controller"] == $arr[0] && $v["action"] == $arr[1]){
                return true;
            }
        }
        die("<script>alert('权限不够');location.href='?r=index/index'</script>");
    }
}