<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosAreas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-areas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>

    <?= $form->field($model, 'id_area')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
