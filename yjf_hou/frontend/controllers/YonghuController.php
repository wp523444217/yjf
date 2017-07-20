<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use frontend\models\Yonghu;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\Query;

/**
 * Site controller
 */
class YonghuController extends CommonController
{
    public $enableCsrfValidation = false;
    //引用头部
    public $layout = "header";
    /**
     * @inheritdoc
     */
    //用户管理(添加)
    public function actionAdd()
    {
        return $this->render("add");
    }
    //用户信息的提交
    public function actionTj()
    {
        $uname=Yii::$app->request->post("uname");
        $age=Yii::$app->request->post("age");
        $telephone=Yii::$app->request->post("telephone");
        $email=Yii::$app->request->post("email");
        $datepicker=Yii::$app->request->post("datepicker");
        $udesc=Yii::$app->request->post("udesc");
        $sql = "insert into fang_xinxi value('','','$uname','$telephone','$age','$email','$datepicker','$udesc')";
        $data = yii::$app->db->createCommand($sql)->execute();
        if($data)
        {
             echo "<script>alert('添加成功');location.href='?r=yonghu/show';</script>";
        }else
        {
            echo json_encode($data);
        }
    }
    //信息展示
    public function actionShow()
    {
        $res = (new \yii\db\Query());
        $data = $res->select('*')->from('fang_xinxi')->all();
        return $this->render("show",['data'=>$data]);     
    }
    //信息的删除
    public function actionDel()
    {
        $id=Yii::$app->request->get("id");
        $data = yii::$app->db->createCommand("delete from fang_xinxi where x_id = '$id'")->execute();
        if($data)
        {
             echo "<script>alert('删除成功');location.href='?r=yonghu/show';</script>";
        }else
        {
            echo json_encode($data);
        }
    }
    //即点即改
    public function actionXiugai()
    {
        $zhi = Yii::$app->request->get("zhi");
        $id=Yii::$app->request->get("id");
        $arr = array("uname"=>$zhi);
        $sql = "update fang_xinxi set x_name = '$zhi' where x_id = $id";
        $msg = yii::$app->db->createCommand($sql)->execute();
        if($msg)
        {
            echo 1;
        }else
        {
            echo 'no';
        }
    }
}
