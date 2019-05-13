<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenesPagosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenes Pagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenes-pagos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordenes Pagos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_orden_pago',
            'numero',
            'id_expediente',
            'importe',
            'fecha_carga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
