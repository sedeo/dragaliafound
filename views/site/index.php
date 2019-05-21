<?php


use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Dragalia Found';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <?= Html::a('Aventureros', ['aventureros/index']) ?>
            </div>
            <div class="col-lg-3">
                <?= Html::a('Dragones', ['dragones/index']) ?>
            </div>
            <div class="col-lg-3">
                <h2>Armas</h2>
            </div>
            <div class="col-lg-3">
                <h2>Wyrmprints</h2>
            </div>
        </div>

    </div>
</div>
