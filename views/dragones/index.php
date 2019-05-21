<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DragonesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dragones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dragones-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dragones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'elemento',
            'rareza',
            'backstory',
            //'hab_id',
            //'pas1_id',
            //'pas2_id',
            //'vida_base',
            //'vida_maxima',
            //'fuerza_base',
            //'fuerza_maxima',
            //'vida_base_pasiva',
            //'fuerza_base_pasiva',
            //'vida_maxima_pasiva',
            //'fuerza_maxima_pasiva',
            //'resistencia_elemental',
            //'resistencia_base',
            //'resistencia_maxima',
            //'imagen_entera',
            //'imagen_minimizada',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
