<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%swap.produtos}}".
 *
 * @property integer $idprodutos
 * @property string $user_id
 * @property string $title
 * @property string $description
 * @property string $images
 * @property string $category
 * @property string $date
 * @property string $preferencias_troca
 */
class ProdutosModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%swap.produtos}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'category', 'date'], 'required'],
            [['date'], 'safe'],
            [['user_id', 'title', 'description', 'images', 'category', 'preferencias_troca'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idprodutos' => 'Idprodutos',
            'user_id' => 'User ID',
            'title' => 'Título do produto',
            'description' => 'Descrição',
            'images' => 'Images',
            'category' => 'Categoria',
            'date' => 'Date',
            'preferencias_troca' => 'Preferências para troca',
        ];
    }

    /**
     * @inheritdoc
     * @return TblProdutosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblProdutosQuery(get_called_class());
    }
}
