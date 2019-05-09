<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExpedientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expedientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expedientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Expedientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_expediente',
            'id_codigo_prefijo',
            'codigo_sufijo',
            'fecha_inicio',
            'fecha_entrada',
            // 'iniciador',
            // 'id_departamento',
            // 'asunto',
            // 'id_tipo_tramite',
            // 'fecha_pago',
            // 'importe',
            // 'fojas',
            // 'estado',
            // 'id_usuario',
            // 'id_area',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
