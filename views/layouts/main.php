<?php

/* @var $this View */
/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\web\View;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  </head>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'SWAP',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => true,
        'items' => [
            ['label' => Yii::$app->user->isGuest ? 'Cadastre-se' : Yii::$app->user->identity->name_user, 'visible'=>!Yii::$app->user->isGuest, 'encode'=>true],
            Yii::$app->user->isGuest ? (
                '<li>'
                . Html::beginForm(['/site/login'], 'post')
                . Html::textInput("LoginForm[email]", false, ['class' => 'userLogin', 'placeholder' => 'email'])
                . Html::passwordInput("LoginForm[password]",false,['class' => 'passwordLogin', 'placeholder' => 'password'])
                . Html::submitButton(
                    'Entrar',
                    ['class' => 'btn btn-link login-button']
                )
                . Html::endForm()
                . '</li>'
            ) : 
            (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Sair',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    
    <div class="container">
        <?= $content ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>
/*    body {
        background: url("/img/background/bghome.jpg") no-repeat center center fixed!important;
        -webkit-background-size: cover!important;
        -moz-background-size: cover!important;
        -o-background-size: cover!important;
        background-size: cover!important;
    }*/
    .navbar-nav{
        padding: 0px;
        margin: 0px;
        list-style: none;
        display: inline;
    }
   
</style>
