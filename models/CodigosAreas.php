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
            [['id_codigo', 'id_area', 'estado'], 'required'],
            [['id_codigo', 'id_area', 'estado'], 'integer'],
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
        ];
    }
}
