<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProdutosModel */

$this->title = 'Update Produtos Model: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Produtos Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->idprodutos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produtos-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
