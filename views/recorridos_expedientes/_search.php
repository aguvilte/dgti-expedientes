<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecorridosExpedientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recorridos-expedientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_recorrido') ?>

    <?= $form->field($model, 'id_expediente') ?>

    <?= $form->field($model, 'id_area_desde') ?>

    <?= $form->field($model, 'id_area_hacia') ?>

    <?= $form->field($model, 'fecha_hora') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
