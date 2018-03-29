<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="head">
    <center>
        <?= Html::a(Html::img(['/logo.png']),['site/index'] ) ?>
    </center>
</div>
    <?= $content ?>
<!-- Navbar (sticky bottom) -->
<div class="w3-bottom w3-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
        <?= Html::a( 'ABOUT', 
            ['site/about'],
            [
                'style'=>'width:25%;text-decoration: none;',
                'class' => 'w3-bar-item w3-button w3-hover'
            ]) 
        ?>
        <?= Html::a( 'CRICKET CENTER', 
            ['site/cricket-center'],
            [
                'style'=>'width:25%;text-decoration: none;',
                'class' => 'w3-bar-item w3-button w3-hover'
            ]) 
        ?>
        <?= Html::a( 'EVENTS', 
            ['site/event'],
            [
                'style'=>'width:25%;text-decoration: none;',
                'class' => 'w3-bar-item w3-button w3-hover'
            ]) 
        ?>
        <?= Html::a( 'BOOKING', 
            ['site/booking'],
            [
                'style'=>'width:25%;text-decoration: none;',
                'class' => 'w3-bar-item w3-button w3-hover'
            ]) 
        ?>
    </div>
</div> 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
