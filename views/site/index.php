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
        <div class="col-md-3 mais-buscados">
            <div class="card card-inverse card-primary mb-3 text-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                    <p>Anuncie seu produto já! cria uma conta gratuitamente.</p>
                </blockquote>
              </div>
            </div>
            <div class="card card-inverse card-success mb-3 text-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                  <p>Quer que seu produto de troca alcance um maior número de pessoas? Assine por apenas 3,50 reais mensais.</p>
                </blockquote>
              </div>
            </div>
            <div class="card card-inverse card-info mb-3 text-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                  <p>Trocar produtos nunca foi tão fácil e divertido. Vem pro swap!</p>
                </blockquote>
              </div>
            </div>
            <div class="card card-inverse card-warning mb-3 text-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                  <p>Sabe aquele seu item velho dentro da gaveta? Tem alguém procurando por ele!</p>
                </blockquote>
              </div>
            </div>
            <div class="card card-inverse card-danger text-center">
              <div class="card-block">
                <blockquote class="card-blockquote">
                  <p>Conheça as regras do swap</p>
                </blockquote>
              </div>
            </div>
        </div>
        <div class = "col-md-6 feed-div">
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
        <div class="col-md-3 menu">
            <center>
                <span><b>Mais buscados</b></span>
            </center>
        </div>
    </div>
</div>

<style>
    .feed-div{
        background: #D9E0E7;
        border-radius: 3px;
        min-height: 200px;
        height: 100%;
    }
    
    .menu{
        background-color: #fff;
        border-radius: 3px;
        padding: 20px;
        min-height: 600px;
        margin-right: -15px;
        margin-left: 15px;
        height: 100%;
    }
    
    .mais-buscados{
        border-radius: 3px;
        /*padding: 20px;*/
        min-height: 464px;
        margin-right: 15px;
        margin-left: -15px;
        height: 100%;
/*        border: 2px solid #ccc;*/
    }
</style>
