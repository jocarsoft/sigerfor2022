<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EspecieGuia;

/**
 * EspecieGuiaSearch represents the model behind the search form of `app\models\EspecieGuia`.
 */
class EspecieGuiaSearch extends EspecieGuia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_guia', 'id_especie_plan', 'canpie'], 'integer'],
            [['produc', 'nomcom', 'nomcie', 'unimed', 'observ'], 'safe'],
            [['voltot'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = EspecieGuia::find();

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
            'id' => $this->id,
            'id_guia' => $this->id_guia,
            'id_especie_plan' => $this->id_especie_plan,
            'canpie' => $this->canpie,
            'voltot' => $this->voltot,
        ]);

        $query->andFilterWhere(['like', 'produc', $this->produc])
            ->andFilterWhere(['like', 'nomcom', $this->nomcom])
            ->andFilterWhere(['like', 'nomcie', $this->nomcie])
            ->andFilterWhere(['like', 'unimed', $this->unimed])
            ->andFilterWhere(['like', 'observ', $this->observ]);

        return $dataProvider;
    }
}
