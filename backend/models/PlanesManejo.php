<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "planes_manejo".
 *
 * @property int $id
 * @property int|null $id_th
 * @property string|null $tipth
 * @property string|null $contrato
 * @property string|null $fecsol
 * @property string|null $fecio
 * @property string|null $fecita
 * @property string|null $tdleg
 * @property string|null $docleg
 * @property string|null $fecleg
 * @property string|null $nomdis
 * @property string|null $docges
 * @property string|null $tipge
 * @property int|null $nump
 * @property string|null $fecini
 * @property string|null $fecter
 * @property float|null $supapr
 * @property float|null $volapr
 * @property string|null $unimed
 * @property int|null $finali
 * @property int|null $id_regente
 * @property string|null $numrgt
 * @property string|null $nomrgt
 * @property string|null $dnirgt
 * @property string|null $respau
 * @property string|null $rester
 * @property string|null $seresu
 * @property float|null $mmulta
 * @property string|null $observ
 * @property string|null $gcloud
 * @property int|null $id_usuario
 * @property string|null $fecha_registro
 *
 * @property EspeciePlan[] $especiePlans
 * @property Guia[] $guias
 * @property Regente $regente
 * @property TituloHabilitante $th
 * @property Usuarios $usuario
 */
class PlanesManejo extends \yii\db\ActiveRecord
{

    public $buscar;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planes_manejo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_th', 'nump', 'finali', 'id_regente', 'id_usuario'], 'integer'],
            [['fecsol', 'fecio', 'fecita', 'fecleg', 'fecini', 'fecter', 'fecha_registro'], 'safe'],
            [['supapr', 'volapr', 'mmulta'], 'number'],
            [['tipth', 'tdleg'], 'string', 'max' => 50],
            [['contrato', 'docleg', 'nomdis', 'docges', 'tipge', 'unimed', 'numrgt', 'nomrgt', 'dnirgt', 'respau', 'rester'], 'string', 'max' => 45],
            [['seresu', 'gcloud'], 'string', 'max' => 200],
            [['observ'], 'string', 'max' => 250],
            [['id_regente'], 'exist', 'skipOnError' => true, 'targetClass' => Regente::className(), 'targetAttribute' => ['id_regente' => 'id']],
            [['id_th'], 'exist', 'skipOnError' => true, 'targetClass' => TituloHabilitante::className(), 'targetAttribute' => ['id_th' => 'id']],
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
            'id_th' => 'Id Th',
            'tipth' => 'Tipo de TH',
            'contrato' => 'C??digo del t??tulo habilitante',
            'fecsol' => 'Fecha de solicitud',
            'fecio' => 'Fecha de la Inspecci??n Ocular',
            'fecita' => 'Fecha del Informe de Aprobaci??n',
            'tdleg' => 'Tipo de Documento Legal',
            'docleg' => 'N??mero de resoluci??n que aprueba el plan de manejo',
            'fecleg' => 'lFecha de documento de aprobaci??neg',
            'nomdis' => 'Nombre del Distrito',
            'docges' => 'Tipo de plan de manejo forestal',
            'tipge' => 'Tipo de documento de gesti??n',
            'nump' => 'N??mero de plan de PO(Plan Operativo)',
            'fecini' => 'Fecha de inicio de vigencia del plan de manejo',
            'fecter' => 'Fecha de termino de vigencia del plan de manejo',
            'supapr' => 'Superficie aprobada (ha)',
            'volapr' => 'Cantidad aprobada para el aprovechamiento',
            'unimed' => 'Unidad de medida',
            'finali' => 'Finalidad de aprovechamiento',
            'id_regente' => 'Regente',
            'numrgt' => 'N?? de registro del regente que elabor?? documento',
            'nomrgt' => 'Nombre de regente que elabor?? documento de gesti??n',
            'dnirgt' => 'N?? DNI del regente forestal',
            'respau' => 'Resoluci??n inicio PAU (OSINFOR)',
            'rester' => 'Resoluci??n t??rmino PAU (OSINFOR)',
            'seresu' => 'Indica lo que resuelve la resoluci??n de t??rmino de PAU (Osinfor)',
            'mmulta' => 'Monto de la multa',
            'observ' => 'Observaciones',
            'gcloud' => 'Link del expediente en la nube',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
        ];
    }

    /**
     * Gets query for [[EspeciePlans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspeciePlans()
    {
        return $this->hasMany(EspeciePlan::className(), ['id_plan' => 'id']);
    }

    /**
     * Gets query for [[Guias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuias()
    {
        return $this->hasMany(Guia::className(), ['id_plan' => 'id']);
    }

    /**
     * Gets query for [[Regente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegente()
    {
        return $this->hasOne(Regente::className(), ['id' => 'id_regente']);
    }

    /**
     * Gets query for [[Th]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTh()
    {
        return $this->hasOne(TituloHabilitante::className(), ['id' => 'id_th']);
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
