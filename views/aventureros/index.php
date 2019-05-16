<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AventurerosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aventureros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aventureros-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aventureros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'rareza',
            'elemento',
            'arma',
            //'hab1_id',
            //'hab2_id',
            //'pas1_id',
            //'pas2_id',
            //'pas3_id',
            //'coab_id',
            //'backstory',
            //'vida_base',
            //'vida_maxima',
            //'vida4promocion',
            //'vida5promocion',
            //'vida40nodos',
            //'vida45nodos',
            //'vida50nodos',
            //'fuerza_base',
            //'fuerza_maxima',
            //'fuerza4promocion',
            //'fuerza5promoción',
            //'fuerza40nodos',
            //'fuerza45nodos',
            //'fuerza50nodos',
            //'imagen_entera',
            //'imagen_minimizada',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
