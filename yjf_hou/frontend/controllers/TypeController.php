<?php
namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\FangType;
/**
 * Site controller
 */
class TypeController extends CommonController
{
	//引用头部
    public $layout = "header";
    public $enableCsrfValidation = false;
    /**
     * @inheritdoc
     */
    //后台直播分类展示
    public function actionShow()
    {

        $user = new \app\models\FangType();
        // 查询总数
        $user_count = $user->find()->count();
        $data['pages'] = new Pagination(['totalCount' => $user_count]);
        // 设置每页显示多少条
        $data['pages']->defaultPageSize =10;
        $user_list = $user->find()->offset($data['pages']->offset)->limit($data['pages']->limit)->asArray()->all();
        $data['pages']->params=array("tab"=>'all');


        return $this->render('show',[
            'data' => $data,
            'user_list' => $user_list,
        ]);

//    	$db = Yii::$app->db;
//    	$sql="select * from fang_type order by t_sort";
//    	$data=$db->createCommand($sql)->queryAll();
//    	$data=$this->actionRecu($data);
//
//    	// var_dump($data);die;
//        return $this->render("show",["data"=>$data]);
    }
    //分类添加
    public function actionAdd(){
    	$db = Yii::$app->db;
    	if($post=Yii::$app->request->post()){

            if($_FILES['img']['name']!=""){

                $img=$this->actionUpload($_FILES['img']);
            }else{

                $img="./images/2017-07-21/150062783310001.jpg";
            }
    		$count=$db->createCommand()->insert("fang_type",
    			[
	    			"t_name"=>$post["t_name"],
	    			"p_t_id"=>$post["p_t_id"],
                    "t_sort"=>$post["t_sort"],
	    			"add_time"=>date("Y-m-d H:i:s"),
	    			"img"=>$img,
    			])->execute();
    		if($count == 1){
    			echo "<script>alert('添加成功');location.href='?r=type/show';</script>";
    			// $this->redirect("?r=type/show");
    		}else{
				echo "<script>alert('添加失败');</script>";exit();
				// $this->redirect("?r=type/add");
    		}
    	}else{
	    	$sql="select * from fang_type where p_t_id=0";
	    	$data=$db->createCommand($sql)->queryAll();
	    	// var_dump($data);die;
	    	return $this->render("add",array("parents"=>$data));

    	}
    }
   	public function actionDel($id){
   		$db = Yii::$app->db;
   		if(Yii::$app->request->get("id")){
    		$count=$db->createCommand()->delete("fang_type","t_id=$id")->execute();
    		// var_dump($count);die;
    		if($count){
    			// echo "<script>alert('删除成功');location.href='?r=type/show';</script>";
    			$this->redirect("?r=type/show");
    		}else{
				// echo "<script>alert('删除失败');location.href='?r=type/show';</script>";exit();
				$this->redirect("?r=type/show");
    		}
    	}else{
    		// echo "<script>alert('请选择要删除的项');location.href='?r=type/show';</script>";exit();
    		$this->redirect("?r=type/show");
    	}
   	}
   	//修改
   	public function actionUpdate($id){
   		$db = Yii::$app->db;
   		if(Yii::$app->request->get("t_name")){
   			$t_name=Yii::$app->request->get("t_name");
   			$sql="update fang_type set t_name ='{$t_name}' where t_id = {$id}";
   			$count = $db->createCommand($sql)->query();
   			if($count){
   				echo 1;
   			}else{
   				echo 2;
   			}
   		}else{
   			$id = Yii::$app->request->get("id");
   			$db = Yii::$app->db;
	    	$sql="select * from fang_type where t_id={$id}";
	    	$data=$db->createCommand($sql)->queryAll();
	    	$parentsSql="select * from fang_type where p_t_id=0";
	    	$parents=$db->createCommand($parentsSql)->queryAll();
	    	// var_dump($data);die;
	        return $this->render("update",["data"=>$data[0],"parents"=>$parents]);

   		}
   	}
   	public function actionUpdatedo(){
   		$db = Yii::$app->db;
   		$post=Yii::$app->request->post();
   		$sql="update fang_type set t_name ='{$post["t_name"]}',t_state='{$post["t_state"]}',t_state='{$post["t_sort"]}',p_t_id='{$post["p_t_id"]}' where t_id = {$post["t_id"]}";
   		$count = $db->createCommand($sql)->query();
   		if($count){
			// echo "<script>alert('修改成功');location.href='?r=type/show';</script>";
			$this->redirect("?r=type/show");
		}else{
			// echo "<script>alert('修改失败');location.href='?r=type/show';</script>";exit();
			$this->redirect("?r=type/show");
		}
   	}
    //递归处理数据
    public function actionRecu($arr,$thisid=0){
		$list=array();
		foreach($arr as $k=>$v){
			if($v["p_t_id"]==$thisid){
				$v["san"]=$this->actionRecu($arr,$v["t_id"]);
				$list[]=$v;
			}
		}
		return $list;

	}

    public function actionUpload($name){
        if($name['size']>2*1024*1024) die("文件太大，请重新上传");
        $arr=array('image/jpeg','image/jpg','image/gif','image/png');
        if(!in_array($name['type'],$arr));
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
