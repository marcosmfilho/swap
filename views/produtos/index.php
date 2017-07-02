<?php

use app\models\ProdutosSearch;
use yii\data\ActiveDataProvider;
use yii\web\View;

/* @var $this View */
/* @var $searchModel ProdutosSearch */
/* @var $dataProvider ActiveDataProvider */

$this->title = 'Produtos Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-model-index">
    
    <?php echo $this->render('produto', ['model' => $model]); ?>
    
</div>
