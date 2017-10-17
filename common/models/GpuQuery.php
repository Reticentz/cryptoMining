<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[gpu]].
 *
 * @see gpu
 */
class GpuQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return gpu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return gpu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
