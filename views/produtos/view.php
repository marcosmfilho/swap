<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutosModel */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Produtos Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idprodutos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idprodutos], [
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
            'idprodutos',
            'user_id',
            'title',
            'description',
            'images',
            'category',
            'date',
            'preferencias_troca',
        ],
    ]) ?>

</div>
