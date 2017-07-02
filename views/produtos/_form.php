<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutosModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-model-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row form-novo-produto">
        <div class="col-md-12">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'preferencias_troca')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Publicar Produto' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-produto' : 'btn btn-primary btn-produto']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<style>
    .form-novo-produto{
        background: #fff;
        padding: 20px;
        padding-bottom: 2px;
        border-radius: 3px;
        margin-bottom: 10px;
    }
    
    .btn-produto{
        width: 100%;
    }
</style>