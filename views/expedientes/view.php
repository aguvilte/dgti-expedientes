<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Expedientes */

$this->title = $model->id_expediente;
$this->params['breadcrumbs'][] = ['label' => 'Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expedientes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_expediente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_expediente], [
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
            'id_expediente',
            'id_codigo_prefijo',
            'codigo_sufijo',
            'fecha_inicio',
            'fecha_entrada',
            'iniciador',
            'id_departamento',
            'asunto',
            'id_tipo_tramite',
            'fecha_pago',
            'importe',
            'fojas',
            'estado',
            'id_usuario',
            'id_area',
        ],
    ]) ?>

</div>
