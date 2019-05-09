<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenes_pagos".
 *
 * @property integer $id_orden_pago
 * @property integer $numero
 * @property integer $id_expediente
 * @property double $importe
 * @property string $fecha_carga
 */
class OrdenesPagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordenes_pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'id_expediente', 'importe', 'fecha_carga'], 'required'],
            [['numero', 'id_expediente'], 'integer'],
            [['importe'], 'number'],
            [['fecha_carga'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_orden_pago' => 'Id Orden Pago',
            'numero' => 'Numero',
            'id_expediente' => 'Id Expediente',
            'importe' => 'Importe',
            'fecha_carga' => 'Fecha Carga',
        ];
    }
}
