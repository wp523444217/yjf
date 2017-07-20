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
class LoginController extends Controller
{
    public $enableCsrfValidation = false;
	//引用头部
    public $layout = false;
    /**
     * @inheritdoc
     */
    //登录页面
    public function actionLogin()
    {
        return $this->render("login");
    }
    //登录页面跳转
    public function actionLogin_do()
    {
        if(yii::$app->request->isPost) {
            $post = yii::$app->request->post();
            $dbs = new User();
            $pwd = md5(yii::$app->request->post('pwd'));
            $username = yii::$app->request->post('username');
            $userinfo = $dbs->find()->where("username='$post[username]'")->one();
            if(!$userinfo)
            {
                echo "<script>alert('用户名验证错误');location.href='?r=login/login';</script>";
            }elseif($pwd != $userinfo['pwd']){
                  echo "<script>alert('密码验证错误');location.href='?r=login/login';</script>";
            }else{
                $session = Yii::$app->session;
                $session->set("username",$username);
                 echo "<script>alert('login成功');location.href='?r=yonghu/show';</script>";
            }
        }
      
    }
    public function actionTuichu()
    {
        $session=Yii::$app->session;
        $session->remove('username');
        echo "<script>location.href='?r=login/login';</script>";
    }

            
            
}
