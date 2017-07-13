<?php

use app\models\UsersModel;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model UsersModel */
/* @var $form ActiveForm */
?>

<div class="users-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'name_user')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'born_date')->widget(MaskedInput::className(), [
            'mask' => '99/99/9999',
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    </div>
        
    <div class="form-group col-md-12 buttons">
        <?= Html::submitButton($model->isNewRecord ? 'Criar conta!' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn-confirm' : 'btn btn-primary']) ?>
    </div>
    
    <div class="buttons-alternative">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger btn-gmail">Fazer Login com Gmail</button>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-facebook">Fazer Login com Facebook</button>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<style>
    .buttons{
        margin-top: 15px;
        text-align: right;
        padding-bottom: 20px;
    }
    
    .buttons-alternative{
        text-align: center;
        margin-top: 15px;
    }
    
    .btn-gmail, .btn-facebook, .btn-confirm{
        width: 100%;
    }
</style>
    
