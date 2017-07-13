<?php

use app\models\ProdutosModel;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ProdutosModel */

//$this->titulo = $model->title;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produtos'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-model-view row">
    <div class="col-md-6 parte1">
        <div class="div-titulo col-md-12">
            <span class="titulo"><?= $model->title ?></span>
        </div>
        <div class="div imagem col-md-12">
            <img src="<?= '/img/produtos/' . $model->images ?>"
             alt="Imagem"
             style="width: 100%;
                    /* width: 670px; */
                    /* height: 433px; */
                    box-shadow: 7px 6px 8px #888888;
                    cursor: pointer;
                    border-radius: 5px;box-shadow: 7px 6px 8px #888888; cursor: pointer">
        </div>
    </div>
    <div class="col-md-6 parte2">
        <span><b>Informações Gerais:</b> </span><br>
        <div class="div-descricao col-md-12">
            <b>Dono: </b>
            <span><i>Marcos Filho</i></span><br><br>
            <b>Cidade:</b><br>
            <span><i>Fortaleza</i></span><br><br>
            <b>Descrição:</b><br>
            <span><i><?= $model->description ?></i></span>
        </div>
        <div class="preferencias-troca col-md-12">
            <span><b>Preferência para trocas:</b></span><br>
            <?php
                $preferencias = $model->preferencias_troca;
                $preferenciasArray = explode(",", $preferencias);
                foreach ($preferenciasArray as $key => $value) {
                    echo '<span class="label label-info">' . $value . '</span> ';
                }
             ?>
        </div>
        <div class="operacoes col-md-12">
                <button type="button" class="btn btn-success conversar-dono">Conversar com o dono</button>
        </div>
    </div>
</div>

<style>
    .conversar-dono{
        width: 100%;
        margin-top: 107px;
    }
    .div-descricao, .preferencias-troca, .operacoes{
        margin-top: 15px;
    }
    .parte1, .parte2{
        background-color: #F6F3EE;
        padding: 20px;
    }
    
    .parte2{
        padding-top: 65px;
    }
    .produtos-model-view{
        background: #F6F3EE;
        border-radius: 5px;
        margin-top: 20px;
    }
    body{
        background-color: #E8E1D3!important;
    }
    .titulo{
       font-size: 35px;
    }
</style>
<!-- utilizando input no form
<div class="form-group col-md-12">
      <button type="button" class="select-arquivo btn btn-default">
        <i class="fa fa-download" aria-hidden="true"></i> Selecionar arquivo
      </button>
      <input type="text" class="form-control input-arquivo" placeholder="Nenhum arquivo selecionado...">
      <?= ""//$form->field($model, 'arquivo')->fileInput(['class'=>'uploadCSV','multiple' => false, 'accept' => '.csv']) ?>
</div>

<style>
  .uploadCSV{
    opacity: 0;
    position: absolute;
    top: 0;
    height: 45px;
    width: 162px;
    height: 34px;
  }
</style>

no controller
$model->arquivo = UploadedFile::getInstance($model, 'arquivo');

if($model->upload()){
      $arquivo = $model->arquivo->name;
      $caminho = $filename = Url::to("@app") . '/web/uploads/' . $arquivo;
      if (($handle = fopen($caminho, "r")) !== FALSE) {
        while (($arrayNumeros = fgetcsv($handle, 1000, ",")) !== FALSE) {
              foreach ($arrayNumeros as $key => $value) {
                  CommandHelper::enviarSMS("canalteste", $value, $mensagem);
                  sleep(2);
              }
        }
        fclose($handle);
      }

      if(file_exists($caminho)){
          unlink($caminho);
      }

      return $this->redirect('index?action=sucesso', array('action' => 'enviado'));
}
else{
      return $this->redirect('index?action=erro', array('action' => 'erro'));
} -->