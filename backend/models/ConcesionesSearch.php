<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Concesionesmod;

/**
 * ConcesionesSearch represents the model behind the search form of `app\models\Concesionesmod`.
 */
class ConcesionesSearch extends Concesionesmod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'TIPCON', 'ADENDA', 'PROCOT', 'CONCUR', 'ANOTORG', 'FINALI', 'OBJCON', 'TIPAGO', 'ESTCON', 'SITUAC', 'ESTARE', 'ESTOSI', 'id_usuario'], 'integer'],
            [['RESREG', 'FECREG', 'CONTRA', 'FECONT', 'NOMTIT', 'NUMRUC', 'NOMREL', 'TIPDOC', 'NRODOC', 'SECTOR', 'NOMDIS', 'SEDDSC', 'DOCLEG', 'FECLEG', 'UNIAPR', 'FECINI', 'FECTER', 'CODACT', 'RESAUT', 'RESOSI', 'FECOSI', 'RDOCAD', 'FECCAD', 'OBSERV','departamento_co','provincia_co', 'distrito_co','GCLOUD', 'fecha_registro'], 'safe'],
            [['SUPAPR', 'PAGODA'], 'number'],
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
        $query = Concesionesmod::find();

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
            'TIPCON' => $this->TIPCON,
            'FECONT' => $this->FECONT,
            'ADENDA' => $this->ADENDA,
            'PROCOT' => $this->PROCOT,
            'CONCUR' => $this->CONCUR,
            'SUPAPR' => $this->SUPAPR,
            'FECLEG' => $this->FECLEG,
            'ANOTORG' => $this->ANOTORG,
            'FECINI' => $this->FECINI,
            'FECTER' => $this->FECTER,
            'FINALI' => $this->FINALI,
            'OBJCON' => $this->OBJCON,
            'PAGODA' => $this->PAGODA,
            'TIPAGO' => $this->TIPAGO,
            'ESTCON' => $this->ESTCON,
            'SITUAC' => $this->SITUAC,
            'ESTARE' => $this->ESTARE,
            'ESTOSI' => $this->ESTOSI,
            'FECOSI' => $this->FECOSI,
            'FECCAD' => $this->FECCAD,
            'id_usuario' => $this->id_usuario,
            'fecha_registro' => $this->fecha_registro,
            'departamento_co' => $this->departamento_co,
            'provincia_co' => $this->provincia_co,
            'distrito_co' => $this->distrito_co,


        ]);

        $query->andFilterWhere(['like', 'RESREG', $this->RESREG])
            ->andFilterWhere(['like', 'FECREG', $this->FECREG])
            ->andFilterWhere(['like', 'CONTRA', $this->CONTRA])
            ->andFilterWhere(['like', 'NOMTIT', $this->NOMTIT])
            ->andFilterWhere(['like', 'NUMRUC', $this->NUMRUC])
            ->andFilterWhere(['like', 'NOMREL', $this->NOMREL])
            ->andFilterWhere(['like', 'TIPDOC', $this->TIPDOC])
            ->andFilterWhere(['like', 'NRODOC', $this->NRODOC])
            ->andFilterWhere(['like', 'SECTOR', $this->SECTOR])
            ->andFilterWhere(['like', 'NOMDIS', $this->NOMDIS])
            ->andFilterWhere(['like', 'SEDDSC', $this->SEDDSC])
            ->andFilterWhere(['like', 'DOCLEG', $this->DOCLEG])
            ->andFilterWhere(['like', 'UNIAPR', $this->UNIAPR])
            ->andFilterWhere(['like', 'CODACT', $this->CODACT])
            ->andFilterWhere(['like', 'RESAUT', $this->RESAUT])
            ->andFilterWhere(['like', 'RESOSI', $this->RESOSI])
            ->andFilterWhere(['like', 'RDOCAD', $this->RDOCAD])
            ->andFilterWhere(['like', 'OBSERV', $this->OBSERV])
            ->andFilterWhere(['like', 'GCLOUD', $this->GCLOUD])
            ->andFilterWhere(['like', 'departamento_co', $this->departamento_co])
            ->andFilterWhere(['like', 'provincia_co', $this->provincia_co])
            ->andFilterWhere(['like', 'distrito_co', $this->distrito_co]);

        return $dataProvider;
    }
}
