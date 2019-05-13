<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CodigosAreas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="codigos-areas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_codigo')->textInput() ?>

    <?= $form->field($model, 'id_area')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'fecha_registro')->textInput() ?>

    <?= $form->field($model, 'id_resolucion_asignacion')->textInput() ?>

    <?= $form->field($model, 'id_resolucion_liberación')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
