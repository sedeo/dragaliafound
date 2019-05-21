<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dragones */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Dragones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dragones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'elemento',
            'rareza',
            'backstory',
            'hab_id',
            'pas1_id',
            'pas2_id',
            'vida_base',
            'vida_maxima',
            'fuerza_base',
            'fuerza_maxima',
            'vida_base_pasiva',
            'fuerza_base_pasiva',
            'vida_maxima_pasiva',
            'fuerza_maxima_pasiva',
            'resistencia_elemental',
            'resistencia_base',
            'resistencia_maxima',
            'imagen_entera',
            'imagen_minimizada',
        ],
    ]) ?>

</div>
