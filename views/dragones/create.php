<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dragones */

$this->title = 'Create Dragones';
$this->params['breadcrumbs'][] = ['label' => 'Dragones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dragones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
