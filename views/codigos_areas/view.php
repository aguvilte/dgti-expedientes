<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CodigosAreas */

$this->title = $model->id_codigo_area;
$this->params['breadcrumbs'][] = ['label' => 'Codigos Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codigos-areas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_codigo_area], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_codigo_area], [
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
            'id_codigo_area',
            'id_codigo',
            'id_area',
            'estado',
        ],
    ]) ?>

</div>
