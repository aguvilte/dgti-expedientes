<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenesPagosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenes-pagos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_orden_pago') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'id_expediente') ?>

    <?= $form->field($model, 'importe') ?>

    <?= $form->field($model, 'fecha_carga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
