<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regente".
 *
 * @property int $id
 * @property string|null $contrato
 * @property string|null $docleg
 * @property string|null $numrgt
 * @property string|null $nomrgt
 * @property string|null $dni
 * @property string|null $fecini
 * @property string|null $fecter
 * @property string|null $observ
 * @property int|null $id_usuario
 * @property string|null $fecha_registro
 *
 * @property PlanesManejo[] $planesManejos
 * @property Usuarios $usuario
 */
class Regente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecini', 'fecter', 'fecha_registro'], 'safe'],
            [['id_usuario'], 'integer'],
            [['contrato', 'docleg', 'numrgt', 'nomrgt', 'dni'], 'string', 'max' => 45],
            [['observ'], 'string', 'max' => 200],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['id_usuario' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contrato' => 'Número de Contrato del TH',
            'docleg' => 'Número de resolución que aprueba el cambio de regente',
            'numrgt' => 'N° de registro del regente que elaboró documento',
            'nomrgt' => 'Nombre de regente que elaboró documento de gestión',
            'dni' => 'Numero DNI del regente',
            'fecini' => 'Fecha de inicio de vigencia del contrato entre el regente y el TH.',
            'fecter' => 'Fecha de termino de vigencia del contrato entre el regente y el TH.',
            'observ' => 'Observaciones',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
        ];
    }

    /**
     * Gets query for [[PlanesManejos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanesManejos()
    {
        return $this->hasMany(PlanesManejo::className(), ['id_regente' => 'id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'id_usuario']);
    }
}
