<?php
namespace console\controllers;
use yii;
use yii\console\Controller;

class IndexController extends Controller
{
	public function actionSend(){
		$mail= Yii::$app->mailer->compose(); 
        $mail->setTo('3097881265@qq.com'); //要发送给那个人的邮箱 
        $mail->setSubject("邮件主题"); //邮件主题 
        $mail->setTextBody('测试text'); //发布纯文字文本 
        $mail->setHtmlBody("测试html text"); //发送的消息内容 
        var_dump($mail->send());
	}
}