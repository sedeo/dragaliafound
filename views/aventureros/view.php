<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aventureros */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Aventureros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aventureros-view">

    <h1 align='center'><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->can('admin')): ?>
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
    <?php endif; ?>

    <div class="info-personaje">
        <?= Html::img(Yii::getAlias('@web').'/uploads/imagen_entera/'. $model->imagen_entera) ?>

        <div class="detalles">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'backstory',
                    'vida_base',
                    'vida_maxima',
                    'fuerza_base',
                    'fuerza_maxima',
                    'rareza',
                    'elemento',
                    'arma',
                ],
            ]) ?>
        </div>

    </div>

    <div class="habilidades">
        <h3 align='center'>Habilidades</h3>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th><h4 align='center'><?= $model->hab1->nombre ?></h4></th>
                    <th><h4 align='center'><?= $model->hab2->nombre ?></h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align='center'><?= $model->hab1->descripcion ?></td>
                    <td align='center'><?= $model->hab2->descripcion ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pasivas">
        <h3 align='center'>Pasivas</h3>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th><h4 align='center'><?= $model->pas1->nombre ?></h4></th>
                    <th><h4 align='center'><?= $model->pas2->nombre ?></h4></th>
                    <th><h4 align='center'><?= $model->pas3->nombre ?></h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align='center'><?= $model->pas1->descripcion ?></td>
                    <td align='center'><?= $model->pas2->descripcion ?></td>
                    <td align='center'><?= $model->pas3->descripcion ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="cohabilidad">
        <h3 align='center'>Co-habilidad</h3>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th><h4 align='center'><?= $model->coab->nombre ?></h4></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td align='center'><?= $model->coab->descripcion ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
