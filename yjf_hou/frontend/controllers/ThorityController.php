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
class ThorityController extends Controller
{
	//引用头部
    public $layout = "header";
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    //后台权限展示
    public function actionShow()
    {
        $db=Yii::$app->db;
        $sql="select * from fang_thority";
        $data=$db->createCommand($sql)->queryAll();
        // var_dump($data);die;
        return $this->render("show",["data"=>$data]);
    }
    //权限添加
    public function actionAdd(){
        if($post=Yii::$app->request->post()){
            $db=Yii::$app->db;
            $count=$db->createCommand()->insert("fang_thority",
                [
                    "t_name"=>$post["t_name"],
                    "controller"=>$post["controller"],
                    "action"=>$post["action"],
                    "t_state"=>$post["t_state"],
                    "add_username"=>"admin",
                    "add_time"=>date("Y-m-d H:i:s"),
                ])->execute();
            if($count){
                echo "<script>alert('添加成功');location.href='?r=thority/show';</script>";
                // $this->redirect("?r=type/show");
            }else{
                echo "<script>alert('添加失败');</script>";exit();
                // $this->redirect("?r=type/add");
            }
        }else{
            return $this->render("add");
        }
    }
    //修改
    public function actionUpdate($id){
        $db = Yii::$app->db;
        if(Yii::$app->request->get("t_name")){
            $t_name=Yii::$app->request->get("t_name");
            $sql="update fang_thority set t_name ='{$t_name}' where t_id = {$id}";
            $count = $db->createCommand($sql)->query();
            if($count){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            $id = Yii::$app->request->get("id");
            $db = Yii::$app->db;
            $sql="select * from fang_thority where t_id={$id}";
            $data=$db->createCommand($sql)->queryAll();
            // var_dump($data);die;
            return $this->render("update",["data"=>$data[0]]);

        }
    }
    public function actionUpdatedo(){
        $db = Yii::$app->db;
        $post=Yii::$app->request->post();
        $sql="update fang_thority set t_name ='{$post["t_name"]}',controller ='{$post["controller"]}',action ='{$post["action"]}',t_state='{$post["t_state"]}' where t_id = {$post["t_id"]}";
        $count = $db->createCommand($sql)->query();
        if($count){
            // echo "<script>alert('修改成功');location.href='?r=type/show';</script>";
            $this->redirect("?r=thority/show");
        }else{
            // echo "<script>alert('修改失败');location.href='?r=type/show';</script>";exit();
            $this->redirect("?r=thority/show");
        }
    }


}
