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
    }
}