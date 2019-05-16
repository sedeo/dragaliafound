<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aventureros */

$this->title = 'Create Aventureros';
$this->params['breadcrumbs'][] = ['label' => 'Aventureros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aventureros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
