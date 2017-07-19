<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class LiwuController extends Controller
{
	public $enableCsrfValidation = false;
	//引用头部
    public $layout = "header";
	
	public function actionIndex()
    {
            return $this->render("index");
    }

    public function actionAdd()
    {
//        print_r($_POST);

            $l_img=$this->actionUpload($_FILES['l_img']);
            $db=Yii::$app->db;
//            $sql="insert into fang_liwu VALUE ('','".$_POST['l_name']."','".$l_img."','".$_POST['l_money']."')";
            $query=$db->createCommand()->insert('fang_liwu',
                [
                    'l_name'=>$_POST['l_name'],
                    'l_img'=>$l_img,
                    'l_money'=>$_POST['l_money'],
                ])->execute();
            if($query){
                return $this->render('index');
            }
    }

    public function actionShow()
    {
        $db=Yii::$app->db;
        $sql="select * from  fang_liwu";
        $query=$db->createCommand($sql)->queryAll();
        print_r($query);die;
    }
    public function actionUpload($name){
        if($name['size']>2*1024*1024) die("文件太大，请重新上传");
        $arr=array('image/jpeg','image/jpg','image/gif');
        if(!in_array($name['type'],$arr)) die("文件格式不正确");
        $time=date("Y-m-d",time());
        if(!file_exists("images/".$time))
        {
            mkdir("images/".$time,0777,true);
        }
        $a="./images/".$time."/".time().$name['name'];
        move_uploaded_file($name['tmp_name'],$a);
        return $a;
    }
}