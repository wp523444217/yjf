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
class LoginController extends Controller
{
	//引用头部
    public $layout = "header";
    /**
     * @inheritdoc
     */
    //登录页面
    public function actionLogin()
    {
        return $this->render("login");
    }
}
