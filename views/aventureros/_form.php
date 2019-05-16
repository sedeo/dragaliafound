<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aventureros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aventureros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rareza')->textInput() ?>

    <?= $form->field($model, 'elemento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'arma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hab1_id')->textInput() ?>

    <?= $form->field($model, 'hab2_id')->textInput() ?>

    <?= $form->field($model, 'pas1_id')->textInput() ?>

    <?= $form->field($model, 'pas2_id')->textInput() ?>

    <?= $form->field($model, 'pas3_id')->textInput() ?>

    <?= $form->field($model, 'coab_id')->textInput() ?>

    <?= $form->field($model, 'backstory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vida_base')->textInput() ?>

    <?= $form->field($model, 'vida_maxima')->textInput() ?>

    <?= $form->field($model, 'vida4promocion')->textInput() ?>

    <?= $form->field($model, 'vida5promocion')->textInput() ?>

    <?= $form->field($model, 'vida40nodos')->textInput() ?>

    <?= $form->field($model, 'vida45nodos')->textInput() ?>

    <?= $form->field($model, 'vida50nodos')->textInput() ?>

    <?= $form->field($model, 'fuerza_base')->textInput() ?>

    <?= $form->field($model, 'fuerza_maxima')->textInput() ?>

    <?= $form->field($model, 'fuerza4promocion')->textInput() ?>

    <?= $form->field($model, 'fuerza5promoción')->textInput() ?>

    <?= $form->field($model, 'fuerza40nodos')->textInput() ?>

    <?= $form->field($model, 'fuerza45nodos')->textInput() ?>

    <?= $form->field($model, 'fuerza50nodos')->textInput() ?>

    <?= $form->field($model, 'imagen_entera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagen_minimizada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
