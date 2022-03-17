<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Guia;

/**
 * GuiaSearch represents the model behind the search form of `app\models\Guia`.
 */
class GuiaSearch extends Guia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_plan', 'id_usuario'], 'integer'],
            [['clase_guia', 'numgtf', 'fecexp', 'fecter', 'modth', 'codtih', 'docleg', 'docges', 'numpo', 'numpar', 'depro', 'seddsc', 'prvpro', 'dispro', 'gtfori', 'depdes', 'prodes', 'disdes', 'tipper', 'tipdoc', 'numdoc', 'aperaz', 'apemat', 'nombre', 'tipgtf', 'medio', 'plaveh', 'plarem', 'nomcon', 'numlic', 'facpag', 'observ', 'gcloud', 'fecha_registro'], 'safe'],
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
        $query = Guia::find();

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
            'fecexp' => $this->fecexp,
            'fecter' => $this->fecter,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'clase_guia', $this->clase_guia])
            ->andFilterWhere(['like', 'numgtf', $this->numgtf])
            ->andFilterWhere(['like', 'modth', $this->modth])
            ->andFilterWhere(['like', 'codtih', $this->codtih])
            ->andFilterWhere(['like', 'docleg', $this->docleg])
            ->andFilterWhere(['like', 'docges', $this->docges])
            ->andFilterWhere(['like', 'numpo', $this->numpo])
            ->andFilterWhere(['like', 'numpar', $this->numpar])
            ->andFilterWhere(['like', 'depro', $this->depro])
            ->andFilterWhere(['like', 'seddsc', $this->seddsc])
            ->andFilterWhere(['like', 'prvpro', $this->prvpro])
            ->andFilterWhere(['like', 'dispro', $this->dispro])
            ->andFilterWhere(['like', 'gtfori', $this->gtfori])
            ->andFilterWhere(['like', 'depdes', $this->depdes])
            ->andFilterWhere(['like', 'prodes', $this->prodes])
            ->andFilterWhere(['like', 'disdes', $this->disdes])
            ->andFilterWhere(['like', 'tipper', $this->tipper])
            ->andFilterWhere(['like', 'tipdoc', $this->tipdoc])
            ->andFilterWhere(['like', 'numdoc', $this->numdoc])
            ->andFilterWhere(['like', 'aperaz', $this->aperaz])
            ->andFilterWhere(['like', 'apemat', $this->apemat])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'tipgtf', $this->tipgtf])
            ->andFilterWhere(['like', 'medio', $this->medio])
            ->andFilterWhere(['like', 'plaveh', $this->plaveh])
            ->andFilterWhere(['like', 'plarem', $this->plarem])
            ->andFilterWhere(['like', 'nomcon', $this->nomcon])
            ->andFilterWhere(['like', 'numlic', $this->numlic])
            ->andFilterWhere(['like', 'facpag', $this->facpag])
            ->andFilterWhere(['like', 'observ', $this->observ])
            ->andFilterWhere(['like', 'gcloud', $this->gcloud]);

        return $dataProvider;
    }
}
