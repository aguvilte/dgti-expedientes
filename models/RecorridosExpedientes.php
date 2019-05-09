<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recorridos_expedientes".
 *
 * @property integer $id_recorrido
 * @property integer $id_expediente
 * @property integer $id_area_desde
 * @property integer $id_area_hacia
 * @property string $fecha_hora
 * @property integer $estado
 */
class RecorridosExpedientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recorridos_expedientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_expediente', 'id_area_desde', 'id_area_hacia', 'fecha_hora', 'estado'], 'required'],
            [['id_expediente', 'id_area_desde', 'id_area_hacia', 'estado'], 'integer'],
            [['fecha_hora'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_recorrido' => 'Id Recorrido',
            'id_expediente' => 'Id Expediente',
            'id_area_desde' => 'Id Area Desde',
            'id_area_hacia' => 'Id Area Hacia',
            'fecha_hora' => 'Fecha Hora',
            'estado' => 'Estado',
        ];
    }
}
