<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'SSE - Sistema de Seguimiento de Expedientes';

?>
<div class="site-index">

    <div class="_jumbotron">
       <h2 class="titulo-area">Sistema de Seguimiento de Expedientes</h2>
       <hr>
    </div>

    <div class="body-content">
      <div>

              <?php if ($model->id_rol==1 or $model->id_rol==2) {
                echo '
                <div class="panel panel-primary">
                  <div class="panel-heading">
                        <h2 class="titulo-seccion">Gestión Pública</h2>
                  </div>
                  <div class="panel-body">';

                foreach ($UsuariosSecciones as $UsuariosSeccion) {

                  if ($UsuariosSeccion->id_seccion==1) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_beneficiarios.png') . Yii::t('app','AREAS'), ['/beneficiarios/index']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==2) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_consulta.png') . Yii::t('app','CODIGOS'), ['/ayudas/filters']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==3) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','RESOLUCIONES'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                }

              } 
              echo '</div>';?>

          </div>
        <div>

              <?php if ($model->id_rol==1 or $model->id_rol==3) {
                echo '
                <div class="panel panel-primary">
                  <div class="panel-heading">
                        <h2 class="titulo-seccion">ROL 3 (nombre del area al q pertenece el usuario?)</h2>
                  </div>
                  <div class="panel-body">';

                foreach ($UsuariosSecciones as $UsuariosSeccion) {

                  if ($UsuariosSeccion->id_seccion==4) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_beneficiarios.png') . Yii::t('app','CONSULTA CODIGO'), ['/beneficiarios/index']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==5) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_consulta.png') . Yii::t('app','CARGA Y ENVIO'), ['/ayudas/filters']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==6) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','RECIBIR'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==7) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','RECORRIDO'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                }
              echo '</div>';
              
              } ?>        

          </div>
          <div>
              <?php if ($model->id_rol==1 or $model->id_rol==4) {
                echo '
                <div class="panel panel-primary">
                  <div class="panel-heading">
                        <h2 class="titulo-seccion">CONTADURÍA</h2>
                  </div>
                  <div class="panel-body">';

                foreach ($UsuariosSecciones as $UsuariosSeccion) {

                  if ($UsuariosSeccion->id_seccion==8) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_beneficiarios.png') . Yii::t('app','CONSULTA CODIGO'), ['/beneficiarios/index']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==9) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_consulta.png') . Yii::t('app','CARGA Y ENVIO'), ['/ayudas/filters']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==10) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','RECIBIR'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==11) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','RECORRIDO'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                  if ($UsuariosSeccion->id_seccion==12) {
                    echo '
                    <article class="grid col-one-quarter mq3-col-full">
                     <div class="ipanel_icon ">';
                      echo Html::a(Html::img('@web/img/ico_historial.png') . Yii::t('app','ORDENES DE PAGO'), ['/fecha-pago/fecha_pago']);
                    echo '
                     </div>
                    </article>';
                  }
                }
              echo '</div>';
              
              } ?> 
            </div>
                            <!--
                            <article class="grid col-one-quarter mq3-col-full">
                                <div class="ipanel_icon"><?php //Html::a(Html::img('@web/img/ico_modificaciones.png') . Yii::t('app','MODIFICACIÓN'), ['/registros/modificacion']) ?></div>
                            </article>-->

        </div>
    </div>
