<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TiposTramites */

$this->title = 'Update Tipos Tramites: ' . $model->id_tipo_tramite;
$this->params['breadcrumbs'][] = ['label' => 'Tipos Tramites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipo_tramite, 'url' => ['view', 'id' => $model->id_tipo_tramite]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-tramites-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
