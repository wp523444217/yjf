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
class CharaController extends CommonController
{
	//引用头部
    public $layout = "header";
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    //后台首页
    public function actionShow()
    {
        $db=Yii::$app->db;
        $sql="select * from fang_chara";
        $thorSql="select * from fang_thority as t right join fang_charathor as ct on t.t_id=ct.t_id";
        $chara=$db->createCommand($sql)->queryAll();
        // var_dump($data);die;
        $thor=$db->createCommand($thorSql)->queryAll();
        foreach($chara as $k=>$v){
            $v["chara"]="";
            foreach($thor as $ks=>$vs){
                if($v["c_id"] == $vs["c_id"]){
                    $v["chara"].=$vs["t_name"]."，";
                }
            }
            $v["chara"]=trim($v["chara"],"，");
            $chara[$k]=$v;
        }
        // var_dump($chara);die;
        return $this->render("show",["data"=>$chara]);
    }
    public function actionAdd(){
        $db = Yii::$app->db;
        if($post=Yii::$app->request->post()){
            var_dump($post);die;
            $count=$db->createCommand()->insert("fang_chara",
                [
                    "c_name"=>$post["c_name"],
                    "c_state"=>$post["c_state"],
                    "add_username"=>"admin",
                    "add_time"=>date("Y-m-d H:i:s"),
                ])->execute();
            if($count == 1){
                $lastidSql="select max(c_id) from fang_chara";
                $id=$db->createCommand($lastidSql)->queryOne();
                $t_id=$post["t_id"];
                foreach($t_id as $k=>$v){
                    $db->createCommand()->insert("fang_charathor",
                    [
                        "c_id"=>$post["c_name"],
                        "t_id"=>$v
                    ])->execute();
                }
                echo "<script>alert('添加成功');location.href='?r=type/show';</script>";
                // $this->redirect("?r=type/show");
            }else{
                echo "<script>alert('添加失败');</script>";exit();
                // $this->redirect("?r=type/add");
            }
        }else{
            $sql="select t_id,t_name from fang_thority where t_state=1";
            $thority=$db->createCommand($sql)->queryAll();
            // var_dump($thority);die;
            return $this->render("add",array("data"=>$thority));

        }
    }


}
