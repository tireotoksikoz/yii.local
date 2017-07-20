<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Good day</h1>

        <p class="lead">That home page. If you want to see company information - please </p>

        <p><?= Html::a('login', ['site/login'], ['class' => 'btn btn-lg btn-success']) ?></p>
    </div>


</div>
