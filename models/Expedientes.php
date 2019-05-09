<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expedientes".
 *
 * @property integer $id_expediente
 * @property integer $id_codigo_prefijo
 * @property string $codigo_sufijo
 * @property string $fecha_inicio
 * @property string $fecha_entrada
 * @property string $iniciador
 * @property integer $id_departamento
 * @property string $asunto
 * @property integer $id_tipo_tramite
 * @property string $fecha_pago
 * @property double $importe
 * @property integer $fojas
 * @property integer $estado
 * @property integer $id_usuario
 * @property integer $id_area
 */
class Expedientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expedientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_codigo_prefijo', 'codigo_sufijo', 'fecha_inicio', 'fecha_entrada', 'iniciador', 'id_departamento', 'asunto', 'id_tipo_tramite', 'fecha_pago', 'importe', 'fojas', 'estado', 'id_usuario', 'id_area'], 'required'],
            [['id_codigo_prefijo', 'id_departamento', 'id_tipo_tramite', 'fojas', 'estado', 'id_usuario', 'id_area'], 'integer'],
            [['fecha_inicio', 'fecha_entrada', 'fecha_pago'], 'safe'],
            [['importe'], 'number'],
            [['codigo_sufijo'], 'string', 'max' => 9],
            [['iniciador'], 'string', 'max' => 128],
            [['asunto'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_expediente' => 'Id Expediente',
            'id_codigo_prefijo' => 'Id Codigo Prefijo',
            'codigo_sufijo' => 'Codigo Sufijo',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_entrada' => 'Fecha Entrada',
            'iniciador' => 'Iniciador',
            'id_departamento' => 'Id Departamento',
            'asunto' => 'Asunto',
            'id_tipo_tramite' => 'Id Tipo Tramite',
            'fecha_pago' => 'Fecha Pago',
            'importe' => 'Importe',
            'fojas' => 'Fojas',
            'estado' => 'Estado',
            'id_usuario' => 'Id Usuario',
            'id_area' => 'Id Area',
        ];
    }
}
