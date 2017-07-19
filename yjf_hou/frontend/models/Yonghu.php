<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ab_personal_user".
 *
 * @property integer $PID
 * @property string $P_password
 * @property string $P_email
 * @property string $P_tel
 * @property integer $P_iscate
 * @property string $P_ask
 *
 * @property AdResume[] $adResumes
 */
class Yonghu extends \yii\db\ActiveRecord
{
	public $uname;
    public $age;
    public $telephone;
    public $email;
    public $datepicker;
    public $udesc;
    /**
     * @inheritdoc
    //表明     */

    public static function tableName()
    {
        return 'fang_xinxi';
    }
    //设置标签的显示名字  
    public function attributeLabels() {  
       return array(  
           "uname"=>"姓名",  
           "age"=>"年龄",  
           "telephone"=>"电话",  
           "email"=>"邮箱",  
           "datepicker"=>"生日",  
           "udesc"=>"个人说明",  
       );  
    }  
}
