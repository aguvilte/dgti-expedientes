<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RecorridosExpedientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recorridos Expedientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="recorridos-expedientes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Recorridos Expedientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_recorrido',
            'id_expediente',
            'id_area_desde',
            'id_area_hacia',
            'fecha_hora',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
