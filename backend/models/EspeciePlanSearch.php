<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\EspeciePlan;

/**
 * EspeciePlanSearch represents the model behind the search form of `app\models\EspeciePlan`.
 */
class EspeciePlanSearch extends EspeciePlan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_plan', 'id_especie', 'canesp'], 'integer'],
            [['resapr', 'docges', 'tipdge', 'numpo', 'parco', 'produc', 'nomcom', 'nomcie', 'unimed', 'observ'], 'safe'],
            [['volapr'], 'number'],
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
        $query = EspeciePlan::find();

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
            'id_plan' => $this->id_plan,
            'id_especie' => $this->id_especie,
            'canesp' => $this->canesp,
            'volapr' => $this->volapr,
        ]);

        $query->andFilterWhere(['like', 'resapr', $this->resapr])
            ->andFilterWhere(['like', 'docges', $this->docges])
            ->andFilterWhere(['like', 'tipdge', $this->tipdge])
            ->andFilterWhere(['like', 'numpo', $this->numpo])
            ->andFilterWhere(['like', 'parco', $this->parco])
            ->andFilterWhere(['like', 'produc', $this->produc])
            ->andFilterWhere(['like', 'nomcom', $this->nomcom])
            ->andFilterWhere(['like', 'nomcie', $this->nomcie])
            ->andFilterWhere(['like', 'unimed', $this->unimed])
            ->andFilterWhere(['like', 'observ', $this->observ]);

        return $dataProvider;
    }
}
