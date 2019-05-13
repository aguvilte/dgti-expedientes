<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TiposTramites */

$this->title = $model->id_tipo_tramite;
$this->params['breadcrumbs'][] = ['label' => 'Tipos Tramites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-tramites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tipo_tramite], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tipo_tramite], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tipo_tramite',
            'nombre',
        ],
    ]) ?>

</div>
