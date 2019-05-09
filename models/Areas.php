<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property integer $id_area
 * @property integer $id_area_padre
 * @property string $nombre
 * @property integer $estado
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_area_padre', 'nombre', 'estado'], 'required'],
            [['id_area_padre', 'estado'], 'integer'],
            [['nombre'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_area' => 'Id Area',
            'id_area_padre' => 'Id Area Padre',
            'nombre' => 'Nombre',
            'estado' => 'Estado',
        ];
    }
}
