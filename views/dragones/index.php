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

    <?php if (Yii::$app->user->can('admin')): ?>

        <p>
            <?= Html::a('Create Dragones', ['create'], ['class' => 'btn btn-success']) ?>
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
                    return Html::a(Html::img(Yii::getAlias('@web').'uploads/imagen_minimizada/'. $data['imagen_minimizada']), ['dragones/view', 'id' => $data->id]);
                },
            ],
            [
                'attribute' => 'nombre',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a(Html::encode($data->nombre), ['dragones/view', 'id' => $data->id]);
                },
            ],
            'elemento',
            'rareza',
            //'backstory',
            'vida_base',
            'vida_maxima',
            'fuerza_base',
            'fuerza_maxima',
            [
                'attribute' => 'hab.nombre',
                'label' => 'Habilidad'
            ],
            [
                'attribute' => 'pas1.nombre',
                'label' => 'Pasiva 1'
            ],
            [
                'attribute' => 'pas2.nombre',
                'label' => 'Pasiva 2',
                'value' => function($data) {
                    return $data['pas2']['nombre'] == null ? '-' : $data['pas2']['nombre'];
                }
            ],
            //'vida_base_pasiva',
            //'fuerza_base_pasiva',
            //'vida_maxima_pasiva',
            //'fuerza_maxima_pasiva',
            //'resistencia_elemental',
            //'resistencia_base',
            //'resistencia_maxima',
            //'imagen_entera',
            //'imagen_minimizada',

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can('admin') ? true : false,
            ],
        ],
    ]); ?>


</div>
