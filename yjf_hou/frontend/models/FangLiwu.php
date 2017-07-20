<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fang_liwu".
 *
 * @property integer $l_id
 * @property string $l_name
 * @property string $l_img
 * @property string $l_money
 */
class FangLiwu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fang_liwu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['l_money'], 'number'],
            [['l_name'], 'string', 'max' => 20],
            [['l_img'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'l_id' => 'L ID',
            'l_name' => 'L Name',
            'l_img' => 'L Img',
            'l_money' => 'L Money',
        ];
    }
}
