<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resoluciones */

$this->title = 'Update Resoluciones: ' . $model->id_resolucion;
$this->params['breadcrumbs'][] = ['label' => 'Resoluciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_resolucion, 'url' => ['view', 'id' => $model->id_resolucion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resoluciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
