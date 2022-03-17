<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Permisosmod;

/**
 * PermisosmodSearch represents the model behind the search form of `app\models\Permisosmod`.
 */
class PermisosmodSearch extends Permisosmod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ASIGNA', 'NUMRUC', 'TIPDOC', 'CATPER', 'CODACT', 'DOCTIT', 'NIVAPR', 'TDLEG', 'EXTEN', 'SITUAC', 'ESTCON', 'ESTOSI', 'id_usuario'], 'integer'],
            [['SEDDSC', 'NUMPER', 'NOMTIT', 'NOMREL', 'NRODOC', 'DOMIC', 'NOMCCN', 'CODCAT', 'NROPAR', 'SECTOR', 'NOMDIS', 'DOCLEG', 'FECLEG', 'FECINI', 'FECTER', 'RESAUT', 'FECON', 'RESOSI', 'FECOSI', 'OBSERV', 'GCLOUD', 'fecha_registro'], 'safe'],
            [['SUPAPR'], 'number'],
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
        $query = Permisosmod::find();

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
            'ASIGNA' => $this->ASIGNA,
            'NUMRUC' => $this->NUMRUC,
            'TIPDOC' => $this->TIPDOC,
            'CATPER' => $this->CATPER,
            'CODACT' => $this->CODACT,
            'DOCTIT' => $this->DOCTIT,
            'SUPAPR' => $this->SUPAPR,
            'NIVAPR' => $this->NIVAPR,
            'TDLEG' => $this->TDLEG,
            'FECLEG' => $this->FECLEG,
            'FECINI' => $this->FECINI,
            'EXTEN' => $this->EXTEN,
            'FECTER' => $this->FECTER,
            'SITUAC' => $this->SITUAC,
            'ESTCON' => $this->ESTCON,
            'FECON' => $this->FECON,
            'ESTOSI' => $this->ESTOSI,
            'FECOSI' => $this->FECOSI,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'SEDDSC', $this->SEDDSC])
            ->andFilterWhere(['like', 'NUMPER', $this->NUMPER])
            ->andFilterWhere(['like', 'NOMTIT', $this->NOMTIT])
            ->andFilterWhere(['like', 'NOMREL', $this->NOMREL])
            ->andFilterWhere(['like', 'NRODOC', $this->NRODOC])
            ->andFilterWhere(['like', 'DOMIC', $this->DOMIC])
            ->andFilterWhere(['like', 'NOMCCN', $this->NOMCCN])
            ->andFilterWhere(['like', 'CODCAT', $this->CODCAT])
            ->andFilterWhere(['like', 'NROPAR', $this->NROPAR])
            ->andFilterWhere(['like', 'SECTOR', $this->SECTOR])
            ->andFilterWhere(['like', 'NOMDIS', $this->NOMDIS])
            ->andFilterWhere(['like', 'DOCLEG', $this->DOCLEG])
            ->andFilterWhere(['like', 'RESAUT', $this->RESAUT])
            ->andFilterWhere(['like', 'RESOSI', $this->RESOSI])
            ->andFilterWhere(['like', 'OBSERV', $this->OBSERV])
            ->andFilterWhere(['like', 'GCLOUD', $this->GCLOUD]);

        return $dataProvider;
    }
}
