<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CohabilidadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cohabilidades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'lvl1') ?>

    <?= $form->field($model, 'lvl2') ?>

    <?php // echo $form->field($model, 'lvl3') ?>

    <?php // echo $form->field($model, 'lvl4') ?>

    <?php // echo $form->field($model, 'lvl5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
