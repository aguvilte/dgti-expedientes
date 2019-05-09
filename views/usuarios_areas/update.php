<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosAreas */

$this->title = 'Update Usuarios Areas: ' . $model->id_usuario_area;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usuario_area, 'url' => ['view', 'id' => $model->id_usuario_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuarios-areas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
