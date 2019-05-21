<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dragones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dragones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'elemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rareza')->textInput() ?>

    <?= $form->field($model, 'backstory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hab_id')->textInput() ?>

    <?= $form->field($model, 'pas1_id')->textInput() ?>

    <?= $form->field($model, 'pas2_id')->textInput() ?>

    <?= $form->field($model, 'vida_base')->textInput() ?>

    <?= $form->field($model, 'vida_maxima')->textInput() ?>

    <?= $form->field($model, 'fuerza_base')->textInput() ?>

    <?= $form->field($model, 'fuerza_maxima')->textInput() ?>

    <?= $form->field($model, 'vida_base_pasiva')->textInput() ?>

    <?= $form->field($model, 'fuerza_base_pasiva')->textInput() ?>

    <?= $form->field($model, 'vida_maxima_pasiva')->textInput() ?>

    <?= $form->field($model, 'fuerza_maxima_pasiva')->textInput() ?>

    <?= $form->field($model, 'resistencia_elemental')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resistencia_base')->textInput() ?>

    <?= $form->field($model, 'resistencia_maxima')->textInput() ?>

    <?= $form->field($model, 'imagen_entera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagen_minimizada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
