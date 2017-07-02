<?php

use app\models\ProdutosModel;
use yii\web\View;


/* @var $this View */
/* @var $model ProdutosModel */

?>
<div class="produtos-model-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
