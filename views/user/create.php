<?php

use app\models\UsersModel;
use yii\web\View;

/* @var $this View */
/* @var $model UsersModel */

$this->title = 'Create Users Model';
$this->params['breadcrumbs'][] = ['label' => 'Users Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-model-create">
    <div class="col-md-12">
        <div class="col-md-6 div-form">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>

</div>

<style>
    body {
        background: url("/img/background/bg.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    
    .wrap {
        background-color: rgba(12, 59, 90, 0.45);
    }
    
    .div-form{
        background: rgba(34, 34, 34, 0.63);
        padding: 25px;
        border-radius: 5px;
        color: #fff;
    }
    
    label{
        color: #fff!important;
    }
</style>