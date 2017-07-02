<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "swap.category".
 *
 * @property integer $idcategory
 * @property string $name
 * @property string $master_category_id
 */
class CategoryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'swap.category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'master_category_id'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcategory' => 'Idcategory',
            'name' => 'Name',
            'master_category_id' => 'Master Category ID',
        ];
    }

    /**
     * @inheritdoc
     * @return categoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new categoryQuery(get_called_class());
    }
}
