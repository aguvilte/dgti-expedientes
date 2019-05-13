<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CodigosAreas */

$this->title = 'Update Codigos Areas: ' . $model->id_codigo_area;
$this->params['breadcrumbs'][] = ['label' => 'Codigos Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_codigo_area, 'url' => ['view', 'id' => $model->id_codigo_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="codigos-areas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
