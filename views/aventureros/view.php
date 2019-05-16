<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aventureros */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aventureros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aventureros-view">

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
            'rareza',
            'elemento',
            'arma',
            'hab1_id',
            'hab2_id',
            'pas1_id',
            'pas2_id',
            'pas3_id',
            'coab_id',
            'backstory',
            'vida_base',
            'vida_maxima',
            'vida4promocion',
            'vida5promocion',
            'vida40nodos',
            'vida45nodos',
            'vida50nodos',
            'fuerza_base',
            'fuerza_maxima',
            'fuerza4promocion',
            'fuerza5promoción',
            'fuerza40nodos',
            'fuerza45nodos',
            'fuerza50nodos',
            'imagen_entera',
            'imagen_minimizada',
        ],
    ]) ?>

</div>
