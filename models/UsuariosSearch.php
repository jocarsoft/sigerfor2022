<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
<<<<<<< HEAD
            [['nombres', 'apellidos'], 'safe'],
=======
            [['nombres', 'apellidos', ], 'safe'],
>>>>>>> d42f829b62c70c48ad78821894654f29ffc03f73
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
        $query = Usuarios::find();

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
           /* 'edad' => $this->edad,*/
        ]);

        $query->andFilterWhere(['like', 'nombres', $this->nombres])
            ->andFilterWhere(['like', 'apellidos', $this->apellidos]);
<<<<<<< HEAD
           /* ->andFilterWhere(['like', 'foto', $this->foto]);*/
=======
            /*->andFilterWhere(['like', 'foto', $this->foto]);*/
>>>>>>> d42f829b62c70c48ad78821894654f29ffc03f73

        return $dataProvider;
    }
}
