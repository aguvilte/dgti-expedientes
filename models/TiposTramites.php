<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipos_tramites".
 *
 * @property integer $id_tipo_tramite
 * @property string $nombre
 */
class TiposTramites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipos_tramites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_tramite' => 'Id Tipo Tramite',
            'nombre' => 'Nombre',
        ];
    }
}
