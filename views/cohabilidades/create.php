<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cohabilidades */

$this->title = 'Create Cohabilidades';
$this->params['breadcrumbs'][] = ['label' => 'Cohabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cohabilidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
