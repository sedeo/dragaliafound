<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DragonesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dragones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'elemento') ?>

    <?= $form->field($model, 'rareza') ?>

    <?= $form->field($model, 'backstory') ?>

    <?php // echo $form->field($model, 'hab_id') ?>

    <?php // echo $form->field($model, 'pas1_id') ?>

    <?php // echo $form->field($model, 'pas2_id') ?>

    <?php // echo $form->field($model, 'vida_base') ?>

    <?php // echo $form->field($model, 'vida_maxima') ?>

    <?php // echo $form->field($model, 'fuerza_base') ?>

    <?php // echo $form->field($model, 'fuerza_maxima') ?>

    <?php // echo $form->field($model, 'vida_base_pasiva') ?>

    <?php // echo $form->field($model, 'fuerza_base_pasiva') ?>

    <?php // echo $form->field($model, 'vida_maxima_pasiva') ?>

    <?php // echo $form->field($model, 'fuerza_maxima_pasiva') ?>

    <?php // echo $form->field($model, 'resistencia_elemental') ?>

    <?php // echo $form->field($model, 'resistencia_base') ?>

    <?php // echo $form->field($model, 'resistencia_maxima') ?>

    <?php // echo $form->field($model, 'imagen_entera') ?>

    <?php // echo $form->field($model, 'imagen_minimizada') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
