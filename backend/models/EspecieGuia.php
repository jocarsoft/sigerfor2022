<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "especie_guia".
 *
 * @property int $id
 * @property int|null $id_guia
 * @property int|null $id_especie_plan
 * @property string|null $produc
 * @property int|null $canpie
 * @property string|null $nomcom
 * @property string|null $nomcie
 * @property float|null $voltot
 * @property string|null $unimed
 * @property string|null $observ
 *
 * @property EspeciePlan $especiePlan
 * @property Guia $guia
 */
class EspecieGuia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'especie_guia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_guia', 'id_especie_plan', 'canpie'], 'integer'],
            [['voltot'], 'number'],
            [['produc', 'nomcom', 'nomcie', 'unimed'], 'string', 'max' => 45],
            [['observ'], 'string', 'max' => 200],
            [['id_especie_plan'], 'exist', 'skipOnError' => true, 'targetClass' => EspeciePlan::className(), 'targetAttribute' => ['id_especie_plan' => 'id']],
            [['id_guia'], 'exist', 'skipOnError' => true, 'targetClass' => Guia::className(), 'targetAttribute' => ['id_guia' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_guia' => 'Guia',
            'id_especie_plan' => 'Especie Plan',
            'produc' => 'Producto a transportar',
            'canpie' => 'Cant. de Productos a Transportar',
            'nomcom' => 'Nombre común de la especie',
            'nomcie' => 'Nombre científico de la especie',
            'voltot' => 'Volúmen total a movilizar',
            'unimed' => 'Unidad de medida',
            'observ' => 'Observaciones',
        ];
    }

    /**
     * Gets query for [[EspeciePlan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspeciePlan()
    {
        return $this->hasOne(EspeciePlan::className(), ['id' => 'id_especie_plan']);
    }

    /**
     * Gets query for [[Guia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuia()
    {
        return $this->hasOne(Guia::className(), ['id' => 'id_guia']);
    }
}
