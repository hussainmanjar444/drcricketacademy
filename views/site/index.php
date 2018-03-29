<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<header class="w3-display-container w3-wide w3-grayscale-min" id="home">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <?= Html::img(['images/1.jpg'], [
                    'alt' => 'New York',
                    'width'=>'100%',
                    'style' => 'height: 610px;'
                    ]) ?>
                
                <div class="carousel-caption" style="right: 20%;left: 20%;padding-bottom: 246px;background: rgba(224, 227, 234, 0);font-size:17px">
                    <?= Html::img(['logo.png'], ['class' => 'logo']) ?>
                </div>
                <div class="carousel-caption" style="background: rgba(45, 99, 137, 0.54);font-size:17px"> 
                    <h3>No cricket team in the world depends on one or two players. The team always plays to win.</h3> 
                </div>      
            </div>
            <div class="item">
                <?= Html::img(['images/2.jpg'], [
                    'alt' => 'Chicago',
                    'width'=>'100%',
                    'style' => 'height: 610px;'
                    ]) ?>
                <div class="carousel-caption" style="right: 20%;left: 20%;padding-bottom: 246px;background: rgba(224, 227, 234, 0);font-size:17px">
                    <?= Html::img(['logo.png'], ['class' => 'logo']) ?>
                </div>
                <div class="carousel-caption" style="background: rgba(45, 99, 137, 0.54);font-size:17px"> 
                    <h3>No cricket team in the world depends on one or two players. The team always plays to win.</h3> 
                </div>      
            </div>
            <div class="item">
                <?= Html::img(['images/3.jpg'], [
                    'alt' => 'Chicago',
                    'width'=>'100%',
                    'style' => 'height: 610px;'
                    ]) ?>
                <div class="carousel-caption" style="right: 20%;left: 20%;padding-bottom: 246px;background: rgba(224, 227, 234, 0);font-size:17px">
                    <?= Html::img(['logo.png'], ['class' => 'logo']) ?>
                </div>
                <div class="carousel-caption" style="background: rgba(45, 99, 137, 0.54);font-size:17px"> 
                    <h3>No cricket team in the world depends on one or two players. The team always plays to win.</h3> 
                </div>      
            </div>
        </div> 
    </div>
</header> 
