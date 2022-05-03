<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Especie;

/**
 * EspecieSearch represents the model behind the search form of `app\models\Especie`.
 */
class EspecieSearch extends Especie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_categoria'], 'integer'],
            [['nombre_comun', 'nombre_cientifico', 'familia'], 'safe'],
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
        $query = Especie::find();

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
            'id_categoria' => $this->id_categoria,
        ]);

        $query->andFilterWhere(['like', 'nombre_comun', $this->nombre_comun])
            ->andFilterWhere(['like', 'nombre_cientifico', $this->nombre_cientifico])
            ->andFilterWhere(['like', 'familia', $this->familia]);

        return $dataProvider;
    }
}
