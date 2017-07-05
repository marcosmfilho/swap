<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersModel */

$this->title = 'Update Users Model: ' . $model->iduser;
$this->params['breadcrumbs'][] = ['label' => 'Users Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iduser, 'url' => ['view', 'id' => $model->iduser]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
