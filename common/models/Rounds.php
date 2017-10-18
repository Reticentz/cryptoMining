<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rounds".
 *
 * @property integer $block_number
 * @property integer $zec
 */
class Rounds extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rounds';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_number', 'zec'], 'required'],
            [['block_number', 'zec'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'block_number' => 'Block Number',
            'zec' => 'Zec',
        ];
    }

    /**
     * @inheritdoc
     * @return RoundsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RoundsQuery(get_called_class());
    }
}
