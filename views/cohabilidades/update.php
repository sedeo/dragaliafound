<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cohabilidades */

$this->title = 'Update Cohabilidades: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cohabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cohabilidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
