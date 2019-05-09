<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Expedientes;

/**
 * ExpedientesSearch represents the model behind the search form about `app\models\Expedientes`.
 */
class ExpedientesSearch extends Expedientes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_expediente', 'id_codigo_prefijo', 'id_departamento', 'id_tipo_tramite', 'fojas', 'estado', 'id_usuario', 'id_area'], 'integer'],
            [['codigo_sufijo', 'fecha_inicio', 'fecha_entrada', 'iniciador', 'asunto', 'fecha_pago'], 'safe'],
            [['importe'], 'number'],
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
        $query = Expedientes::find();

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
            'id_expediente' => $this->id_expediente,
            'id_codigo_prefijo' => $this->id_codigo_prefijo,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_entrada' => $this->fecha_entrada,
            'id_departamento' => $this->id_departamento,
            'id_tipo_tramite' => $this->id_tipo_tramite,
            'fecha_pago' => $this->fecha_pago,
            'importe' => $this->importe,
            'fojas' => $this->fojas,
            'estado' => $this->estado,
            'id_usuario' => $this->id_usuario,
            'id_area' => $this->id_area,
        ]);

        $query->andFilterWhere(['like', 'codigo_sufijo', $this->codigo_sufijo])
            ->andFilterWhere(['like', 'iniciador', $this->iniciador])
            ->andFilterWhere(['like', 'asunto', $this->asunto]);

        return $dataProvider;
    }
}
