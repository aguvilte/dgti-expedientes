<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TiposTramites */

$this->title = 'Create Tipos Tramites';
$this->params['breadcrumbs'][] = ['label' => 'Tipos Tramites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-tramites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
