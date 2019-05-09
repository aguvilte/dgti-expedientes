<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Codigos */

$this->title = 'Update Codigos: ' . $model->id_codigo;
$this->params['breadcrumbs'][] = ['label' => 'Codigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_codigo, 'url' => ['view', 'id' => $model->id_codigo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="codigos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
