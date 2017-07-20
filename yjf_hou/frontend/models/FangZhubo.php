<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fang_zhubo".
 *
 * @property integer $z_id
 * @property string $z_name
 * @property integer $is_zhubo
 * @property integer $z_fang
 */
class FangZhubo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fang_zhubo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_zhubo', 'z_fang'], 'integer'],
            [['z_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'z_id' => 'Z ID',
            'z_name' => 'Z Name',
            'is_zhubo' => 'Is Zhubo',
            'z_fang' => 'Z Fang',
        ];
    }
}
