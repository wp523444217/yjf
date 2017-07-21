<?php
namespace frontend\controllers;

use app\models\FangZhubo;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
/**
 * Site controller
 */
class ZhuboController extends CommonController
{
    public $enableCsrfValidation = false;
    //引用头部
    public $layout = "header";

    public function actionShow()
    {
        $user = new FangZhubo();
        // 查询总数
        $user_count = $user->find()->where("is_zhubo=1")->count();
        $data['pages'] = new Pagination(['totalCount' => $user_count]);
        // 设置每页显示多少条
        $data['pages']->defaultPageSize =10;
        $user_list = $user->find()->offset($data['pages']->offset)->where("is_zhubo=1")->limit($data['pages']->limit)->asArray()->all();
        $data['pages']->params=array("tab"=>'all');
        return $this->render('show',[
            'data' => $data,
            'user_list' => $user_list,
        ]);
    }

    public function actionSqlb()
    {
        $user = new FangZhubo();
        // 查询总数
        $user_count = $user->find()->where("is_zhubo!=1")->count();
        $data['pages'] = new Pagination(['totalCount' => $user_count]);
        // 设置每页显示多少条
        $data['pages']->defaultPageSize =10;
        $user_list = $user->find()->offset($data['pages']->offset)->where("is_zhubo!=1")->limit($data['pages']->limit)->asArray()->all();
        $data['pages']->params=array("tab"=>'all');
        return $this->render('sqlb',[
            'data' => $data,
            'user_list' => $user_list,
        ]);
    }

    public function actionDel()
    {
        $id=$_GET['id'];
        $db=Yii::$app->db;
        $query=$db->createCommand()->delete('fang_zhubo',"z_id=$id")->execute();
        if($query == 1){
            echo "<script>alert('删除成功');location.href='?r=zhubo/show';</script>";
        }else{
            echo "<script>alert('删除失败');</script>";exit();
        }
    }

    public function actionUpdate()
    {
        $db=Yii::$app->db;
       
            $sql="update fang_zhubo set is_zhubo=1 where z_id=".$_GET['id'];
//            echo $sql;die;
        $query=$db->createCommand($sql)->execute();
        if($query == 1){
            echo "<script>alert('审核成功');location.href='?r=zhubo/sqlb';</script>";
        }else{
            echo "<script>alert('审核失败');</script>";exit();
        }
    }
}