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
            // var_dump($post);die;
            $count=$db->createCommand()->insert("fang_chara",
                [
                    "c_name"=>$post["c_name"],
                    "c_state"=>$post["c_state"],
                    "add_username"=>"admin",
                    "add_time"=>date("Y-m-d H:i:s"),
                ])->execute();
            if($count == 1){
                $lastidSql="select max(c_id) as c_id from fang_chara";
                $id=$db->createCommand($lastidSql)->queryOne();
                // var_dump($id);die;
                $t_id=$post["t_id"];
                foreach($t_id as $k=>$v){
                    $db->createCommand()->insert("fang_charathor",
                    [
                        "c_id"=>$id["c_id"],
                        "t_id"=>$v
                    ])->execute();
                }
                echo "<script>alert('添加成功');location.href='?r=chara/show';</script>";
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
    public function actionUpdate($id){
        $db = Yii::$app->db;
        if(Yii::$app->request->get("c_name")){
            $c_name=Yii::$app->request->get("c_name");
            $sql="update fang_chara set c_name ='{$c_name}' where c_id = {$id}";
            $count = $db->createCommand($sql)->query();
            if($count){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            $id = Yii::$app->request->get("id");
            $db = Yii::$app->db;

            $charaSql="select * from fang_chara where c_id={$id}";
            $charathorSql="select t_id from fang_charathor where c_id={$id}";
            $charathor=$db->createCommand($charathorSql)->queryAll();
            $thorId=array();
            foreach($charathor as $k=>$v){
                $thorId[]=$v["t_id"];
            }
            $chara=$db->createCommand($charaSql)->queryOne();
            $thorSql="select * from fang_thority";
            $thority=$db->createCommand($thorSql)->queryAll();
            // var_dump($data);die;
            return $this->render("update",["thority"=>$thority,"data"=>$chara,"thorId"=>$thorId]);

        }
    }
    public function actionUpdatedo(){
        $db = Yii::$app->db;
        $post=Yii::$app->request->post();
        $sql="update fang_chara set c_name ='{$post["c_name"]}',c_state ='{$post["c_state"]}' where c_id = {$post["c_id"]}";
        $count = $db->createCommand($sql)->query();
        if($count){
            $delSql="delete from fang_charathor where c_id={$post["c_id"]}";
            $del = $db->createCommand($delSql)->execute();
            if(is_int($del)){
                foreach($post["t_id"] as $k=>$v){
                    $db->createCommand()->insert("fang_charathor",
                    [
                        "c_id"=>$post["c_id"],
                        "t_id"=>$v,
                    ])->execute();
                }
            }
            // echo "<script>alert('修改成功');location.href='?r=type/show';</script>";
            $this->redirect("?r=chara/show");
        }else{
            // echo "<script>alert('修改失败');location.href='?r=type/show';</script>";exit();
            $this->redirect("?r=chara/show");
        }
    }


}
