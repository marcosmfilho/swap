<?php

use app\models\ProdutosModel;
use yii\web\View;

/* @var $this View */
/* @var $model ExtenModule */
$this->title = 'SWAP';
$this->params['breadcrumbs'][] = $this->title;
?>

<br>
<div class="site-index">
    <div class = "row">
        <div class="col-md-9">
            <div class="form-group">
                <input type="text" placeholder="Buscar produtos..." class="form-control" id="usr">
            </div>
            <?php
            if(!Yii::$app->user->isGuest){ ?>
            <div class="novo-post">
                    <?php
                    $modelProdutos = new ProdutosModel();
                    echo $this->render('//produtos/create', ['model'=> $modelProdutos]);
                    ?>
            </div>
            <?php } ?>
            <div class="produtos">
            <?php 
                $produtos = ProdutosModel::find()->asArray()->all();
                echo $this->render('//produtos/index', ['model'=> $produtos]); 
            ?>
            </div>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>

<style>

</style>
