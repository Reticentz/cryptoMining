<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Rounds]].
 *
 * @see Rounds
 */
class RoundsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Rounds[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Rounds|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
