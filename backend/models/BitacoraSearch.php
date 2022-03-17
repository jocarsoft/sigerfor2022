<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bitacora;

/**
 * BitacoraSearch represents the model behind the search form of `app\models\Bitacora`.
 */
class BitacoraSearch extends Bitacora
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bit', 'accion', 'cond_dato', 'tabla', 'usuario', 'fecha_hora'], 'safe'],
            [['id_registro'], 'integer'],
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
        $query = Bitacora::find();

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
            'id_registro' => $this->id_registro,
            'fecha_hora' => $this->fecha_hora,
        ]);

        $query->andFilterWhere(['like', 'id_bit', $this->id_bit])
            ->andFilterWhere(['like', 'accion', $this->accion])
            ->andFilterWhere(['like', 'cond_dato', $this->cond_dato])
            ->andFilterWhere(['like', 'tabla', $this->tabla])
            ->andFilterWhere(['like', 'usuario', $this->usuario]);

        return $dataProvider;
    }
}
