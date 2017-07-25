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
    public function actionMail(){
        $mail= Yii::$app->mailer->compose(); 
        $mail->setTo('3097881265@qq.com'); //要发送给那个人的邮箱 
        $mail->setSubject("邮件主题"); //邮件主题 
        $mail->setTextBody('测试text'); //发布纯文字文本 
        $mail->setHtmlBody("测试html text"); //发送的消息内容 
        var_dump($mail->send());
    }


}
