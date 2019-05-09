<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenesPagos */

$this->title = 'Update Ordenes Pagos: ' . $model->id_orden_pago;
$this->params['breadcrumbs'][] = ['label' => 'Ordenes Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_orden_pago, 'url' => ['view', 'id' => $model->id_orden_pago]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenes-pagos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
