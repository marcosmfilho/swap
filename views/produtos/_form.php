    <?php

use app\models\CategoryModel;
use app\models\ProdutosModel;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model ProdutosModel */
/* @var $form ActiveForm */
?>

<div class="produtos-model-form">
    <center>
        <div class="sub-title">
            <span>Publique seu produto no nosso feed, é simples!</span>
        </div>
    </center>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="col-md-6 form-novo-produto">
        <div class="col-md-12">
            <label>Qual o seu produto?</label>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="col-md-12">
            <label>Faça uma breve descrição sobre o seu produto</label>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="col-md-6">
            <label>Categoria</label>
            <?php $items = ArrayHelper::map(CategoryModel::find()->all(), 'idcategory', 'name'); ?>
            <?= $form->field($model, 'category')->dropDownList($items, ['class' => 'form-control'])->label(false) ?>
        </div>
        <div class="col-md-6">
            <label>O que você procura para trocar?</label>
            <?= $form->field($model, 'preferencias_troca')->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="form-group col-md-12">
            <?= $form->field($model, 'imageFile')->fileInput() ?>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Publicar Produto' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-produto' : 'btn btn-primary btn-produto']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>


<script>
    $(document).on('change', '.uploadImage', function(){
            var str = $(this).val();
            $('.input-arquivo').val(str.split(/(\\|\/)/g).pop());
    });
</script>

<style>
    
    body{
        background: #758583!important;
    }
    
    .sub-title{
        margin-top: 20px;
        margin-bottom: 10px;    
    }
    
    .form-novo-produto{
        margin-top: 20px;
        padding: 20px;
        padding-bottom: 2px;
        border-radius: 3px;
        margin-bottom: 10px;
        background: #404645;
        color: #fff;
        margin-left: 25%;
    }
    
    .btn-produto{
        width: 100%;
    }
    
    span{
        font-size: 30px;
        color: #fff;
        font-family: monospace;
    }
    
    #produtosmodel-description{
        min-height: 85px;
    }
    
    #produtosmodel-category{
        height: inherit!important;
    }
    
.uploadImage{
    opacity: 0;
    position: absolute;
    top: 0;
    height: 45px;
    width: 162px;
    height: 34px;
    float: left;
  }
  
  .input-arquivo{
      float: left;
      width: 70%;
      margin-right: 5px;
  }
</style>