<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "codigos_areas".
 *
 * @property integer $id_codigo_area
 * @property integer $id_codigo
 * @property integer $id_area
 * @property integer $estado
 * @property string $fecha_registro
 * @property integer $id_resolucion_asignacion
 * @property integer $id_resolucion_liberaci贸n
 */
class CodigosAreas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'codigos_areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_codigo', 'id_area', 'estado', 'id_resolucion_asignacion', 'id_resolucion_liberaci贸n'], 'required'],
            [['id_codigo', 'id_area', 'estado', 'id_resolucion_asignacion', 'id_resolucion_liberaci贸n'], 'integer'],
            [['fecha_registro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_codigo_area' => 'Id Codigo Area',
            'id_codigo' => 'Id Codigo',
            'id_area' => 'Id Area',
            'estado' => 'Estado',
            'fecha_registro' => 'Fecha Registro',
            'id_resolucion_asignacion' => 'Id Resolucion Asignacion',
            'id_resolucion_liberaci贸n' => 'Id Resolucion Liberaci愠n',
        ];
    }
}
