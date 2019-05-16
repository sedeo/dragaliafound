<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasivas */

$this->title = 'Create Pasivas';
$this->params['breadcrumbs'][] = ['label' => 'Pasivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasivas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
