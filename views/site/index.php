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
        <div class="col-md-12 anunciar">
            <?php
            if(Yii::$app->user->isGuest){ ?>
            <div class="div-cadastro">
                <center>
                    <span class="span-cadastro">Ainda não tem uma conta Swap? <a href="/user/create">Cadastre-se</a>!</span>
                </center>
            </div>
            <?php } ?>
            <div class="col-md-9">
                <div id="custom-search-input">
                    <div class="input-group">
                        <input type="text" class="search-query form-control buscar-produto" placeholder=" Buscar produtos..." />
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button">
                                <span class=" glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>              
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-info anunciar-produto"><b>ANUNCIE SEU PRODUTO!</b></button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-9">
                <div class="produtos">
                <?php 
                    $produtos = ProdutosModel::find()->orderBy('idprodutos DESC')->asArray()->all();
                    echo $this->render('//produtos/index', ['model'=> $produtos]); 
                ?>
                </div>
            </div>
            <div class="col-md-3 mais-buscados">
                <b><i class="fa fa-plus-circle" aria-hidden="true"></i> Produtos mais buscados</b><br>
                -<br>
                -<br>
                <b><i class="fa fa-plus-circle" aria-hidden="true"></i> Categorias mais buscadas</b><br>
                -<br>
                -<br>
                <b><i class="fa fa-plus-circle" aria-hidden="true"></i> Produtos em destaque</b><br>
                -<br>
                -
            </div>
        </div>
    </div>
</div>

<style>
    body{
        background-color: #E8E1D3!important;
    }
    .anunciar{
        margin-bottom: 25px;
    }
    
    .anunciar-produto{
        width: 100%;
        border: 2px solid;
    }
    
    .mais-buscados{
        background: rgba(255, 255, 255, 0.61);
        border-radius: 3px;
        min-height: 60%;
        padding: 20px;
    }
    
    .span-cadastro{
        font-size: 20px;
        font-family: monospace;
    }
    
    .div-cadastro{
        margin-bottom: 25px;
    }
    
    #custom-search-input {
        width: 102%;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#D9230F;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }

    
</style>

<script>
    $('.anunciar-produto').click(function(){
        window.location.href = "produtos/create";
    }); 
    
    $(".buscar-produto").keyup(function(event){
        if(event.keyCode === 13){
            let valor = $(this).val();
            console.log(valor);
            $.ajax({
                type: 'POST',
                url: "/produtos/filtro",
                data: {valor: valor}
              }).done(function(res) {
                  $('.produtos').html('');
                  $('.produtos').html(res);
              });
        }
    });
</script>
