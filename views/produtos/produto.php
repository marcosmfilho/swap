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

<div class="div-posts">
    <?php foreach ($model as $key => $value) { ?>  
    <div class="post col-md-4">
        <div class="infos">
               <img src="img/perfis/perfil.jpg"
                     alt="Imagem perfil"
                     class="img-perfil"
                >
               <span class="nome-usuario"><b>Marcos Filho</b></span>
        </div>
        <div class="post-head">
            <span><b><?= $value['title'] ?> </b></span><br>
            <b>Categoria</b>: <?= $value['category'] ?><br>
            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Fortaleza, Brazil</span>
        </div>
        <div class='img-produto'>
                <img src="<?= 'img/produtos/' . $value['images'] ?>"
                     alt="Imagem"
                     class="img-post"
                >
        </div>
        <a class="eu-quero" href="<?= '/produtos/view?id=' . $value['idprodutos']?>'">
            <div class="post-detalhes">
                <div class="trocar-produto">
                    <span class='span-troca'>Eu quero!</span>
                </div>
            </div>
        </a>
    </div>
    <?php } ?>
</div>

<style>
    
.eu-quero{
    text-decoration: none!important;
}
    
.post {
    background: rgba(255, 255, 255, 0.61);
    padding: 25px;
    padding-top: 15px;
    border-radius: 5px;
    margin-right: 1%;
    margin-bottom: 10px;
}

.col-md-4{
    width: 32.33333333%
}

.trocar-produto{
    background: #00ACAC;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
    padding: 5px;
}

.trocar-produto:hover{
    background: #009090;
}

.span-troca{
    color: #fff;
    font-size: 15px;
    font-weight: 700;
}

.infos{
    margin-bottom: 10px;
    border-bottom: 1px solid #ccc;
}

.img-post{
    width: 100%;
    height: 155px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 3px solid #00ACAC;

}

.img-perfil{
    width: 12%;
    border-radius: 50px;
    margin-bottom: 6px;
}

.nome-usuario{
    margin-left: 5px;
}
</style>


