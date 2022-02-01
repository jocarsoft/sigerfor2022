<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Autorizacionesmod;

/**
 * AutorizacionesmodSearch represents the model behind the search form of `app\models\Autorizacionesmod`.
 */
class AutorizacionesmodSearch extends Autorizacionesmod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'SEDDSC', 'ASIGNA', 'TIPDOC', 'NOMDIS', 'CODACT', 'SITUAC', 'ESTMOD', 'ESTCON', 'ESTOSI', 'TIPANB', 'DESTIN', 'id_usuario'], 'integer'],
            [['NUMAUT', 'NOMTIT', 'NOMREL', 'NRODOC', 'NOMCCN', 'DOCLEG', 'FECLEG', 'CODCAT', 'SECTOR', 'DOCTIT', 'NROPAR', 'FECINI', 'FECTER', 'NOMRGT', 'NUMRGT', 'DNIREG', 'RESOSI', 'FECMOD', 'FECCON', 'FECOSI', 'OBSERV', 'GCLOUD', 'fecha_registro'], 'safe'],
            [['SUPAPR', 'SUPRES', 'PAGO'], 'number'],
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
        $query = Autorizacionesmod::find();

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
            'SEDDSC' => $this->SEDDSC,
            'ASIGNA' => $this->ASIGNA,
            'TIPDOC' => $this->TIPDOC,
            'FECLEG' => $this->FECLEG,
            'NOMDIS' => $this->NOMDIS,
            'SUPAPR' => $this->SUPAPR,
            'CODACT' => $this->CODACT,
            'FECINI' => $this->FECINI,
            'FECTER' => $this->FECTER,
            'SITUAC' => $this->SITUAC,
            'ESTMOD' => $this->ESTMOD,
            'ESTCON' => $this->ESTCON,
            'FECCON' => $this->FECCON,
            'ESTOSI' => $this->ESTOSI,
            'FECOSI' => $this->FECOSI,
            'TIPANB' => $this->TIPANB,
            'SUPRES' => $this->SUPRES,
            'PAGO' => $this->PAGO,
            'DESTIN' => $this->DESTIN,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'NUMAUT', $this->NUMAUT])
            ->andFilterWhere(['like', 'NOMTIT', $this->NOMTIT])
            ->andFilterWhere(['like', 'NOMREL', $this->NOMREL])
            ->andFilterWhere(['like', 'NRODOC', $this->NRODOC])
            ->andFilterWhere(['like', 'NOMCCN', $this->NOMCCN])
            ->andFilterWhere(['like', 'DOCLEG', $this->DOCLEG])
            ->andFilterWhere(['like', 'CODCAT', $this->CODCAT])
            ->andFilterWhere(['like', 'SECTOR', $this->SECTOR])
            ->andFilterWhere(['like', 'DOCTIT', $this->DOCTIT])
            ->andFilterWhere(['like', 'NROPAR', $this->NROPAR])
            ->andFilterWhere(['like', 'NOMRGT', $this->NOMRGT])
            ->andFilterWhere(['like', 'NUMRGT', $this->NUMRGT])
            ->andFilterWhere(['like', 'DNIREG', $this->DNIREG])
            ->andFilterWhere(['like', 'RESOSI', $this->RESOSI])
            ->andFilterWhere(['like', 'FECMOD', $this->FECMOD])
            ->andFilterWhere(['like', 'OBSERV', $this->OBSERV])
            ->andFilterWhere(['like', 'GCLOUD', $this->GCLOUD]);

        return $dataProvider;
    }
}
