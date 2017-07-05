<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsersModel */

$this->title = $model->iduser;
$this->params['breadcrumbs'][] = ['label' => 'Users Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->iduser], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->iduser], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iduser',
            'name_user',
            'email:email',
            'password',
            'country',
            'city',
            'born_date',
        ],
    ]) ?>

</div>
