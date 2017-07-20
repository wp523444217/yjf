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
class IndexController extends CommonController
{
	//引用头部
    public $layout = "header";
    /**
     * @inheritdoc
     */
    //后台首页
    public function actionIndex()
    {
        return $this->render("index");
    }


}
