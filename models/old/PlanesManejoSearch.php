<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlanesManejo;

/**
 * PlanesManejoSearch represents the model behind the search form of `app\models\PlanesManejo`.
 */
class PlanesManejoSearch extends PlanesManejo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_th', 'nump', 'finali', 'id_regente', 'id_usuario'], 'integer'],
            [['tipth', 'contrato', 'fecsol', 'fecio', 'fecita', 'tdleg', 'docleg', 'fecleg', 'nomdis', 'docges', 'tipge', 'fecini', 'fecter', 'unimed', 'numrgt', 'nomrgt', 'dnirgt', 'respau', 'rester', 'seresu', 'observ', 'gcloud', 'fecha_registro'], 'safe'],
            [['supapr', 'volapr', 'mmulta'], 'number'],
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
        $query = PlanesManejo::find();

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
            'id_th' => $this->id_th,
            'fecsol' => $this->fecsol,
            'fecio' => $this->fecio,
            'fecita' => $this->fecita,
            'fecleg' => $this->fecleg,
            'nump' => $this->nump,
            'fecini' => $this->fecini,
            'fecter' => $this->fecter,
            'supapr' => $this->supapr,
            'volapr' => $this->volapr,
            'finali' => $this->finali,
            'id_regente' => $this->id_regente,
            'mmulta' => $this->mmulta,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'tipth', $this->tipth])
            ->andFilterWhere(['like', 'contrato', $this->contrato])
            ->andFilterWhere(['like', 'tdleg', $this->tdleg])
            ->andFilterWhere(['like', 'docleg', $this->docleg])
            ->andFilterWhere(['like', 'nomdis', $this->nomdis])
            ->andFilterWhere(['like', 'docges', $this->docges])
            ->andFilterWhere(['like', 'tipge', $this->tipge])
            ->andFilterWhere(['like', 'unimed', $this->unimed])
            ->andFilterWhere(['like', 'numrgt', $this->numrgt])
            ->andFilterWhere(['like', 'nomrgt', $this->nomrgt])
            ->andFilterWhere(['like', 'dnirgt', $this->dnirgt])
            ->andFilterWhere(['like', 'respau', $this->respau])
            ->andFilterWhere(['like', 'rester', $this->rester])
            ->andFilterWhere(['like', 'seresu', $this->seresu])
            ->andFilterWhere(['like', 'observ', $this->observ])
            ->andFilterWhere(['like', 'gcloud', $this->gcloud]);

        return $dataProvider;
    }
}
