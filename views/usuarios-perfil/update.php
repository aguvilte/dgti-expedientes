<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = 'Actualizar Contraseña';
$this->params['breadcrumbs'][] = ['label' => 'Mi Perfil', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuarios-update">

    <div>
       <h2 class="titulo-area"><?= Html::encode($this->title) ?></h2>
       <hr>
    </div>

    <?= $this->render('_formUdpate', [
        'model' => $model,
    ]) ?>

</div>
