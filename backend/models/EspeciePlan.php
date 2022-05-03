<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "especie_plan".
 *
 * @property int $id
 * @property int|null $id_plan
 * @property int|null $id_especie
 * @property string|null $resapr
 * @property string|null $docges
 * @property string|null $tipdge
 * @property string|null $numpo
 * @property string|null $parco
 * @property string|null $produc
 * @property string|null $nomcom
 * @property string|null $nomcie
 * @property int|null $canesp
 * @property float|null $volapr
 * @property string|null $unimed
 * @property string|null $observ
 *
 * @property Especie $especie
 * @property EspecieGuia[] $especieGuias
 * @property PlanesManejo $plan
 */
class EspeciePlan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'especie_plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_plan', 'id_especie', 'canesp'], 'integer'],
            [['volapr'], 'number'],
            [['resapr', 'docges', 'tipdge', 'numpo', 'parco', 'produc', 'nomcom', 'nomcie', 'unimed', 'observ'], 'string', 'max' => 45],
            [['id_especie'], 'exist', 'skipOnError' => true, 'targetClass' => Especie::className(), 'targetAttribute' => ['id_especie' => 'id']],
            [['id_plan'], 'exist', 'skipOnError' => true, 'targetClass' => PlanesManejo::className(), 'targetAttribute' => ['id_plan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_plan' => 'Id Plan',
            'id_especie' => 'Id Especie',
            'resapr' => 'Número de resolución que aprueba el plan de manejo forestal',
            'docges' => 'Tipo de plan de manejo forestal',
            'tipdge' => 'Tipo de Documento de Gestión',
            'numpo' => 'Número de plan operativo',
            'parco' => 'Número de parcela de corta',
            'produc' => 'Seleccione el tipo de producto a aprovechar',
            'nomcom' => 'Nombre común de la especie a aprovechar',
            'nomcie' => 'Nombre científico de la especie a aprovechar',
            'canesp' => 'Cantidad de especies',
            'volapr' => 'Cantidad o volúmen aprobado por especie',
            'unimed' => 'Unidad de medida',
            'observ' => 'Observaciones',
        ];
    }

    /**
     * Gets query for [[Especie]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecie()
    {
        return $this->hasOne(Especie::className(), ['id' => 'id_especie']);
    }

    //nueva funcion
    public function getEspecieComun()
    {
        return $this->especie->nombre_comun;
    }

    /**
     * Gets query for [[EspecieGuias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecieGuias()
    {
        return $this->hasMany(EspecieGuia::className(), ['id_especie_plan' => 'id']);
    }

    /**
     * Gets query for [[Plan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(PlanesManejo::className(), ['id' => 'id_plan']);
    }

    public function getPlanContrato()
    {
        return $this->plan->contrato;
    }
}
