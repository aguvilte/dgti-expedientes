<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RecorridosExpedientes */

$this->title = 'Create Recorridos Expedientes';
$this->params['breadcrumbs'][] = ['label' => 'Recorridos Expedientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recorridos-expedientes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
