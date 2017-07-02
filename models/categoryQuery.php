<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CategoryModel]].
 *
 * @see CategoryModel
 */
class categoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CategoryModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CategoryModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
