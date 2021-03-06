<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CodigosAreasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="codigos-areas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_codigo_area') ?>

    <?= $form->field($model, 'id_codigo') ?>

    <?= $form->field($model, 'id_area') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'id_resolucion_asignacion') ?>

    <?php // echo $form->field($model, 'id_resolucion_liberación') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
