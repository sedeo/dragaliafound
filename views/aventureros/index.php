<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
                'attribute' => 'imagen_minimizada',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::a(Html::img(Yii::getAlias('@web').'uploads/imagen_entera/'. $data['imagen_minimizada']), ['aventureros/view', 'id' => $data->id]);
                },
            ],
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
            'vida_maxima',
            'fuerza_maxima',
            [
                'attribute' => 'hab1.nombre',
                'label' => 'Habilidad 1'
            ],
            [
                'attribute' => 'hab2.nombre',
                'label' => 'Habilidad 2'
            ],
            //'coab_id',
            //'backstory',
            //'vida_base',
            //'vida4promocion',
            //'vida5promocion',
            //'vida40nodos',
            //'vida45nodos',
            //'vida50nodos',
            //'fuerza_base',
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
