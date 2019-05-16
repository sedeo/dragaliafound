<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CohabilidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cohabilidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cohabilidades-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cohabilidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'descripcion',
            'lvl1',
            'lvl2',
            //'lvl3',
            //'lvl4',
            //'lvl5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
