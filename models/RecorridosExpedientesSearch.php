<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RecorridosExpedientes;

/**
 * RecorridosExpedientesSearch represents the model behind the search form about `app\models\RecorridosExpedientes`.
 */
class RecorridosExpedientesSearch extends RecorridosExpedientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_recorrido', 'id_expediente', 'id_area_desde', 'id_area_hacia', 'estado'], 'integer'],
            [['fecha_hora'], 'safe'],
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
        $query = RecorridosExpedientes::find();

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
            'id_recorrido' => $this->id_recorrido,
            'id_expediente' => $this->id_expediente,
            'id_area_desde' => $this->id_area_desde,
            'id_area_hacia' => $this->id_area_hacia,
            'fecha_hora' => $this->fecha_hora,
            'estado' => $this->estado,
        ]);

        return $dataProvider;
    }
}
