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
        <div class="post-head">
            <span>Título</span>
        </div>
        <div class='img-produto'>
                <img src="<?= 'img/produtos/' . $value['images'] ?>"
                     alt="Imagem"
                     class="img-post"
                >
        </div>
        <div class="post-detalhes">
            <div class="trocar-produto">
                <span class='span-troca'>Quero trocar!</span>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<style>
    
.post {
    background: rgba(255, 255, 255, 0.61);
    padding: 25px;
    padding-top: 15px;
    border-radius: 5px;
    /*margin: 10px;*/
    /*margin-right: 10px;*/
    margin-bottom: 10px;
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

.img-post{
    width: 100%;
    height: 155px;
    cursor: pointer;
    border-radius: 3px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 3px solid #00ACAC;

}
</style>


