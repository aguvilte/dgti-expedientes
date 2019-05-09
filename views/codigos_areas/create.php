<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CodigosAreas */

$this->title = 'Create Codigos Areas';
$this->params['breadcrumbs'][] = ['label' => 'Codigos Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="codigos-areas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
