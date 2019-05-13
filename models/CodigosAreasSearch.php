<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CodigosAreas;

/**
 * CodigosAreasSearch represents the model behind the search form about `app\models\CodigosAreas`.
 */
class CodigosAreasSearch extends CodigosAreas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_codigo_area', 'id_codigo', 'id_area', 'estado', 'id_resolucion_asignacion', 'id_resolucion_liberación'], 'integer'],
            [['fecha_registro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CodigosAreas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_codigo_area' => $this->id_codigo_area,
            'id_codigo' => $this->id_codigo,
            'id_area' => $this->id_area,
            'estado' => $this->estado,
            'fecha_registro' => $this->fecha_registro,
            'id_resolucion_asignacion' => $this->id_resolucion_asignacion,
            'id_resolucion_liberación' => $this->id_resolucion_liberación,
        ]);

        return $dataProvider;
    }
}
