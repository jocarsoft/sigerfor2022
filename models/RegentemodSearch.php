<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Regente;

/**
 * RegentemodSearch represents the model behind the search form of `app\models\Regente`.
 */
class RegentemodSearch extends Regente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_usuario'], 'integer'],
            [['contrato', 'docleg', 'numrgt', 'nomrgt', 'dni', 'fecini', 'fecter', 'observ', 'fecha_registro'], 'safe'],
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
        $query = Regente::find();

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
            'fecini' => $this->fecini,
            'fecter' => $this->fecter,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'contrato', $this->contrato])
            ->andFilterWhere(['like', 'docleg', $this->docleg])
            ->andFilterWhere(['like', 'numrgt', $this->numrgt])
            ->andFilterWhere(['like', 'nomrgt', $this->nomrgt])
            ->andFilterWhere(['like', 'dni', $this->dni])
            ->andFilterWhere(['like', 'observ', $this->observ]);

        return $dataProvider;
    }
}
