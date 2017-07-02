<?php

use yii\web\View;

/* @var $this View */
/* @var $model ExtenModule */
$this->title = 'SWAP';
$this->params['breadcrumbs'][] = $this->title;

//echo '<pre>';
//var_dump($model[0]['title']);
//die();
?>

<div class = "row div-posts">
    <?php foreach ($model as $key => $value) { ?>   
                <div class="post">
                    <div class="cabecalho row">
                        <div class="col-md-2">
                            <figure>
                                <img src="img/perfil.jpg"
                                     alt="Perfil"
                                     class="img-perfil-post"
                                     >
                            </figure>
                        </div>
                        <div class="col-md-10 post-perfil">
                            <span class="nome-post"><a>Marcos Filho</a></span><br>
                            <span class="data-post">19/06/2017 - Há 11 minutos</span><br>
                            <span class="cidade-post">Fortaleza/CE, Brazil</span>
                        </div>
                    </div>
                    <div class="titulo">
                        <span class="titulo-produto"><b><?= $value['title']?></b></span><br>
                        <span class="categoria-produto"><?= $value['category']?></span>
                    </div><br>
                    <div class='img-produto'>
                        <figure>
                            <img src="<?= 'img/' . $value['images'] ?>"
                                 alt="Imagem"
                                 class="img-post"
                                 >
                        </figure>
                    </div>
                    <div class='descricao-produto'>
                        <span>
                            <i>
                                <?= $value['description']?>
                            </i>
                        </span>
                    </div><br>
                    <div class='preferencias-troca'>
                        <span><b>Preferências para troca:</b></span><br>
                        <div class="produtos">
                            <?php
                                $produtosTroca = explode(",", $value['preferencias_troca']);
                                
                                foreach ($produtosTroca as $key => $value) {
                                    echo '<span class="label label-primary">' . $value .'</span> ';
                                }
                                ?>
                        </div>
                    </div><br>
                    <div class="trocar-produto">
                        <span class='span-troca'>Quero trocar!</span>
                    </div>
                </div>
    <?php } ?>
</div>

<style>
    .div-posts{
        max-height: 700px;
        overflow-y: scroll;
    }
    
    .div-posts::-webkit-scrollbar { width:0px; background:#e3e0d6; } /* configurando scroll */
    .div-posts::-webkit-scrollbar-track { background: rgba(0,0,0,0.1); }
    .div-posts::-webkit-scrollbar-thumb { border-radius:10px; background:#ccc   ;  }
    
    .post{
        background: #D9E0E7;
        padding: 15px;
        border-radius: 3px;
        background: #fff;
        /*border: 2px solid #ccc;*/
        height: 100%;
        margin-bottom: 10px;
    }

    .img-post{
        width: 100%;
        height: 100%;
        cursor: pointer;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    .img-perfil-post{
        width: 60px;
        height: 59px;
        cursor: pointer;
        border-radius: 3px;
        position: relative;
        top: 3px;
    }

    .img-produto, .titulo, .descricao-produto, .preferencias-troca, .trocar-produto{
        padding: 5px;
    }

    .trocar-produto{
        background: #00ACAC;
        border-radius: 3px;
        text-align: center;
        cursor: pointer;
    }

    .span-troca{
        color: #fff;
        font-size: 15px;
        font-weight: 700;
    }

    .trocar-produto:hover{
        background: #009090;
    }

    .cabecalho{
        padding: 5px;
        border-radius: 3px;
        margin-bottom: 5px;
        font-family: initial;
    }
    
    .titulo{
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #ccc;
    }
    .titulo-produto{
        font-size: 20px;
    }

    .nome-post{
        font-size: 17px;
        font-family: inherit;
        text-decoration: none;
        cursor: pointer;
    }

    .produtos{
        /*margin-top: 5px;*/
    }

    .col-md-2 {
        width: 11.666667%;
    }
</style>


