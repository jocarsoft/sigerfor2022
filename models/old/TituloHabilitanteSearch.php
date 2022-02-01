<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TituloHabilitante;

/**
 * TituloHabilitanteSearch represents the model behind the search form of `app\models\TituloHabilitante`.
 */
class TituloHabilitanteSearch extends TituloHabilitante
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['sede', 'tipo_contrato', 'contrato', 'nombre_titular', 'situacion', 'estado', 'distrito', 'provincia', 'anhio_otorgado', 'fecha_contrato', 'gerforcloud'], 'safe'],
            [['superficie'], 'number'],
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
        $query = TituloHabilitante::find();

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
            'superficie' => $this->superficie,
            'fecha_contrato' => $this->fecha_contrato,
        ]);

        $query->andFilterWhere(['like', 'sede', $this->sede])
            ->andFilterWhere(['like', 'tipo_contrato', $this->tipo_contrato])
            ->andFilterWhere(['like', 'contrato', $this->contrato])
            ->andFilterWhere(['like', 'nombre_titular', $this->nombre_titular])
            ->andFilterWhere(['like', 'situacion', $this->situacion])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'distrito', $this->distrito])
            ->andFilterWhere(['like', 'provincia', $this->provincia])
            ->andFilterWhere(['like', 'anhio_otorgado', $this->anhio_otorgado])
            ->andFilterWhere(['like', 'gerforcloud', $this->gerforcloud]);

        return $dataProvider;
    }
}
