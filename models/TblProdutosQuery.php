<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProdutosModel]].
 *
 * @see ProdutosModel
 */
class TblProdutosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProdutosModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProdutosModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
