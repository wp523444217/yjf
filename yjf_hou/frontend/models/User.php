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
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fang_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'string', 'max' => 50],
            [['pwd'], 'char', 'max' => 32],
            [['email'], 'varchar', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => '用户id',
            'username' => '用户名',
            'pwd' => '用户密码',
            'email' => '邮箱'
        ];
    }
}
