<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AventurerosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aventureros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'hab1_id') ?>

    <?php // echo $form->field($model, 'hab2_id') ?>

    <?php // echo $form->field($model, 'pas1_id') ?>

    <?php // echo $form->field($model, 'pas2_id') ?>

    <?php // echo $form->field($model, 'pas3_id') ?>

    <?php // echo $form->field($model, 'coab_id') ?>

    <?php // echo $form->field($model, 'backstory') ?>

    <?php // echo $form->field($model, 'vida_base') ?>

    <?php // echo $form->field($model, 'vida_maxima') ?>

    <?php // echo $form->field($model, 'vida4promocion') ?>

    <?php // echo $form->field($model, 'vida5promocion') ?>

    <?php // echo $form->field($model, 'vida40nodos') ?>

    <?php // echo $form->field($model, 'vida45nodos') ?>

    <?php // echo $form->field($model, 'vida50nodos') ?>

    <?php // echo $form->field($model, 'fuerza_base') ?>

    <?php // echo $form->field($model, 'fuerza_maxima') ?>

    <?php // echo $form->field($model, 'fuerza4promocion') ?>

    <?php // echo $form->field($model, 'fuerza5promoción') ?>

    <?php // echo $form->field($model, 'fuerza40nodos') ?>

    <?php // echo $form->field($model, 'fuerza45nodos') ?>

    <?php // echo $form->field($model, 'fuerza50nodos') ?>

    <?php // echo $form->field($model, 'imagen_entera') ?>

    <?php // echo $form->field($model, 'imagen_minimizada') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
