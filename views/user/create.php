<?php

use app\models\UsersModel;
use yii\web\View;

/* @var $this View */
/* @var $model UsersModel */

$this->title = 'Create Users Model';
$this->params['breadcrumbs'][] = ['label' => 'Users Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    body {
        background: url("/img/background/bgcreate.jpg") no-repeat center center fixed!important;
        -webkit-background-size: cover!important;
        -moz-background-size: cover!important;
        -o-background-size: cover!important;
        background-size: cover!important;
    }
    
    .wrap {
        background-color: rgba(12, 59, 90, 0.45);
    }
    
    .div-form{
        background: rgba(34, 34, 34, 0.63);
        padding: 25px;
        border-radius: 5px;
        color: #fff;
        margin-top: 15px;
        margin-left: 25%;
        
    }
    
    label{
        color: #fff!important;
    }
    
    .sub-title{
        margin-top: 20px;
        margin-bottom: 10px;    
    }
    
    span{
        font-size: 30px;
        color: #fff;
        font-family: monospace;
    }
    
</style>
<div class="users-model-create">
    <div class="col-md-12">
        <center>
            <div class="sub-title">
                <span>Sabe aquele produto velho esquecido no guarda-roupas? Tem alguém
                aqui procurando por ele! Vem pro Swap!
                </span>
            </div>
        </center>
        <div class="col-md-6 div-form">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
