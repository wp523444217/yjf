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
    public function rbac(){
        $controller=$this->id;
        $action=$this->action;
        echo $controller."和".$action;die;
        $db=Yii::$app->db;
        $username=Yii::$app->session['username'];
        $sql="select u_id from fang_user where username='{$username}'";
        $id=$db->createCommand($sql)->queryOne();
        var_dump($id);die;
        $charaSql="select c_id from fang_userchara where u_id={$id}";


    }
}