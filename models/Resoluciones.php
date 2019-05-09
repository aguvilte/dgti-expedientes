<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resoluciones".
 *
 * @property integer $id_resolucion
 * @property string $nombre
 * @property integer $estado
 */
class Resoluciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resoluciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estado'], 'required'],
            [['estado'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_resolucion' => 'Id Resolucion',
            'nombre' => 'Nombre',
            'estado' => 'Estado',
        ];
    }
}
