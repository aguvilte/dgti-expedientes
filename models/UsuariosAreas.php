<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios_areas".
 *
 * @property integer $id_usuario_area
 * @property integer $id_usuario
 * @property integer $id_area
 * @property integer $estado
 */
class UsuariosAreas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios_areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_area', 'estado'], 'required'],
            [['id_usuario', 'id_area', 'estado'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario_area' => 'Id Usuario Area',
            'id_usuario' => 'Id Usuario',
            'id_area' => 'Id Area',
            'estado' => 'Estado',
        ];
    }
}
