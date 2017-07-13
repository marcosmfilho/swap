<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
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
class ProdutosModel extends ActiveRecord
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
    
    /**
     * @var UploadedFile
     */
    
    public $imageFile;
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'category', 'date'], 'required'],
            [['date'], 'safe'],
            [['imageFile'], 'file', 'extensions' => 'gif, jpg',],
            [['user_id', 'title', 'category', 'images','preferencias_troca'], 'string', 'max' => 45],
            [['description'], 'string', 'max' => 1000],
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
            'imageFile' => 'Imagem do produto',
            'category' => 'Categoria',
            'date' => 'Date',
            'preferencias_troca' => 'Preferências para troca',
        ];
    }
    
    public function upload(){
        if($this->validate()){
            $this->imageFile->saveAs('uploads/produtos/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->images = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            return true;
        }else{
            return false;
        }
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
