<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "codigos".
 *
 * @property integer $id_codigo
 * @property string $codigo
 * @property integer $estado
 */
class Codigos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'codigos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'estado'], 'required'],
            [['estado'], 'integer'],
            [['codigo'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_codigo' => 'Id Codigo',
            'codigo' => 'Codigo',
            'estado' => 'Estado',
        ];
    }
}
