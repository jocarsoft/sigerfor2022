<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "guia".
 *
 * @property int $id
 * @property int|null $id_plan
 * @property string|null $clase_guia
 * @property string|null $numgtf
 * @property string|null $fecexp
 * @property string|null $fecter
 * @property string|null $modth
 * @property string|null $codtih
 * @property string|null $docleg
 * @property string|null $docges
 * @property string|null $numpo
 * @property string|null $numpar
 * @property string|null $depro
 * @property string|null $seddsc
 * @property string|null $prvpro
 * @property string|null $dispro
 * @property string|null $gtfori
 * @property string|null $depdes
 * @property string|null $prodes
 * @property string|null $disdes
 * @property string|null $tipper
 * @property string|null $tipdoc
 * @property string|null $numdoc
 * @property string|null $aperaz
 * @property string|null $apemat
 * @property string|null $nombre
 * @property string|null $tipgtf
 * @property string|null $medio
 * @property string|null $plaveh
 * @property string|null $plarem
 * @property string|null $nomcon
 * @property string|null $numlic
 * @property string|null $facpag
 * @property string|null $observ
 * @property string|null $gcloud
 * @property int|null $id_usuario
 * @property string|null $fecha_registro
 *
 * @property EspecieGuia[] $especieGuias
 * @property PlanesManejo $plan
 * @property Usuarios $usuario
 */
class Guia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_plan', 'id_usuario'], 'integer'],
            [['fecexp', 'fecter', 'fecha_registro'], 'safe'],
            [['clase_guia', 'numgtf', 'modth', 'codtih', 'docleg', 'docges', 'numpo', 'numpar', 'dispro', 'gtfori', 'disdes', 'tipper', 'tipdoc', 'numdoc', 'apemat', 'tipgtf', 'medio', 'plaveh', 'plarem', 'numlic', 'facpag'], 'string', 'max' => 45],
            [['depro', 'seddsc', 'prvpro', 'depdes', 'prodes', 'aperaz', 'nombre', 'nomcon'], 'string', 'max' => 100],
            [['observ', 'gcloud'], 'string', 'max' => 200],
            [['id_plan'], 'exist', 'skipOnError' => true, 'targetClass' => PlanesManejo::className(), 'targetAttribute' => ['id_plan' => 'id']],
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
            'id_plan' => 'Id Plan',
            'clase_guia' => 'Si es guia natural o de la autoridad:',
            'numgtf' => 'N??mero de la Gu??a de Transporte Forestal',
            'fecexp' => 'Fecha de expedici??n de la GTF',
            'fecter' => 'Fecha de vencimiento de la GTF',
            'modth' => 'Modalidad del T??tulo Habilitante',
            'codtih' => 'C??digo de T??tulo Habilitante, corresponde a la nomenclartura de t??tulos habilitantes',
            'docleg' => 'N??mero de resoluci??n que aprueba el plan de manejo',
            'docges' => 'Tipo de plan de manejo forestal',
            'numpo' => 'N??mero del plan operativo',
            'numpar' => 'N??mero de parcela de corta',
	        'depro' =>  'Nombre de departamento de procedencia',
            'seddsc' => 'Sede descentralizada que adminstra el permiso (Dentro de cada AFFS, en la lista se muestran las que corresponden a Loreto)',
            'prvpro' => 'Nombre de la provincia de procedencia',
            'dispro' => 'Nombre del Distrito de procedencia',
            'gtfori' => 'N??mero de GTF origen',
	        'depdes' => 'Departamento destino',
            'prodes' => 'Provincia destino',
            'disdes' => 'Distrito destino',
            'tipper' => 'Tipo de Persona Destinatario',
            'tipdoc' => 'Tipo de Documento (destinatario)',
            'numdoc' => 'N?? de Documento Destinatario',
            'aperaz' => 'Apellido Paterno/Razon Social del destinatario',
            'apemat' => 'Apellido Materno del destinatario',
	        'nombre' => 'Nombres del destinatario',
            'tipgtf' => 'Tipo de GTF',
            'medio' => 'Medio por el cual se transporta el producto',
            'plaveh' => 'N??mero de placa del veh??culo que realiza el transporte',
            'plarem' => 'N??mero de placa del remolque que realiza el transporte (de ser el caso)',
            'nomcon' => 'Nombre del conductor del veh??culo',
            'numlic' => 'Nombre del conductor del veh??culo',
            'facpag' => 'Factura de pago por derecho aprovechamiento',
            'observ' => 'Observaciones',
            'gcloud' => 'Gcloud',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
        ];
    }

    /**
     * Gets query for [[EspecieGuias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecieGuias()
    {
        return $this->hasMany(EspecieGuia::className(), ['id_guia' => 'id']);
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
