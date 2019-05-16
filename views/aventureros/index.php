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

    <?php if (Yii::$app->user->can('admin')): ?>
        <p>
            <?= Html::a('Insertar nuevo aventurero', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>


    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'nombre',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a(Html::encode($data->nombre), ['aventureros/view', 'id' => $data->id]);
                },
            ],
            'rareza',
            'elemento',
            'arma',
            [
                'attribute' => 'hab1.nombre',
                'label' => 'Habilidad 1'
            ],
            [
                'attribute' => 'hab2.nombre',
                'label' => 'Habilidad 2'
            ],
            [
                'attribute' => 'pas1.nombre',
                'label' => 'Pasiva 1'
            ],
            [
                'attribute' => 'pas2.nombre',
                'label' => 'Pasiva 2'
            ],
            [
                'attribute' => 'pas3.nombre',
                'label' => 'Pasiva 3'
            ],
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

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can('admin') ? true : false,
            ],
        ],
    ]); ?>


</div>
