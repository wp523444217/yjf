<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fang_type".
 *
 * @property integer $t_id
 * @property string $t_name
 * @property integer $t_state
 * @property integer $p_t_id
 * @property string $add_time
 * @property integer $t_sort
 * @property string $img
 * @property integer $hot
 */
class FangType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fang_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_state', 'p_t_id', 't_sort', 'hot'], 'integer'],
            [['add_time'], 'safe'],
            [['t_name', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            't_state' => 'T State',
            'p_t_id' => 'P T ID',
            'add_time' => 'Add Time',
            't_sort' => 'T Sort',
            'img' => 'Img',
            'hot' => 'Hot',
        ];
    }
}
