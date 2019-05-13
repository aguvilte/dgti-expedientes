<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RecorridosExpedientes */

$this->title = 'Update Recorridos Expedientes: ' . $model->id_recorrido;
$this->params['breadcrumbs'][] = ['label' => 'Recorridos Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_recorrido, 'url' => ['view', 'id' => $model->id_recorrido]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="recorridos-expedientes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
