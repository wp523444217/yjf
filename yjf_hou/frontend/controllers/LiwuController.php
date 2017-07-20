<?php
namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\FangLiwu;

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
            $l_img=$this->actionUpload($_FILES['l_img']);
            $db=Yii::$app->db;
            $query=$db->createCommand()->insert('fang_liwu',
                [
                    'l_name'=>$_POST['l_name'],
                    'l_img'=>$l_img,
                    'l_money'=>$_POST['l_money'],
                ])->execute();
        if($query == 1){
            echo "<script>alert('添加成功');location.href='?r=liwu/index';</script>";
        }else{
            echo "<script>alert('添加失败');</script>";exit();
        }
    }


    public function actionShow()
    {

        $user = new \app\models\FangLiwu();
        // 查询总数
        $user_count = $user->find()->count();
        $data['pages'] = new Pagination(['totalCount' => $user_count]);
        // 设置每页显示多少条
         $data['pages']->defaultPageSize =4;
        $user_list = $user->find()->offset($data['pages']->offset)->limit($data['pages']->limit)->asArray()->all();
        $data['pages']->params=array("tab"=>'all');

        return $this->render('show',[
            'data' => $data,
            'user_list' => $user_list,
        ]);
    }

    public function actionDel()
    {
        $id=$_GET['id'];
        $db=Yii::$app->db;
        $query=$db->createCommand()->delete('fang_liwu',"l_id=$id")->execute();
        if($query == 1){
            echo "<script>alert('删除成功');location.href='?r=liwu/show';</script>";
        }else{
            echo "<script>alert('删除失败');</script>";exit();
        }
    }
    public function actionUpdate()
    {
        $db=Yii::$app->db;
        if(count($_POST)==2)
        {
            $sql="update fang_liwu set l_name='".$_POST['l_name']."' where l_id=".$_POST['l_id'];
        }else{
            $sql="update fang_liwu set l_money='".$_POST['l_money']."' where l_id=".$_POST['l_id'];
//            echo $sql;die;
        }

        $query=$db->createCommand($sql)->execute();
        if($query){
            echo 1;
        }
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