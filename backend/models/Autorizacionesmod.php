<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "autorizacionesmod".
 *
 * @property int $id
 * @property int|null $SEDDSC
 * @property string|null $NUMAUT
 * @property int|null $ASIGNA
 * @property string|null $NOMTIT
 * @property string|null $NOMREL
 * @property string|null $NOMRELD
 * @property string|null $DNIRE
 * @property int|null $TIPDOC
 * @property string|null $NRODOC
 * @property string|null $NOMCCN
 * @property string|null $DOCLEG
 * @property string|null $FECLEG
 * @property string|null $CODCAT
 * @property string|null $SECTOR
 * @property int|null $NOMDIS
 * @property string|null $DOCTIT
 * @property string|null $NROPAR
 * @property float|null $SUPAPR
 * @property int|null $CODACT
 * @property string|null $FECINI
 * @property string|null $FECTER
 * @property string|null $NOMRGT
 * @property string|null $NUMRGT
 * @property string|null $DNIREG
 * @property int|null $SITUAC
 * @property string|null $RESOSI
 * @property int|null $ESTMOD
 * @property string|null $FECMOD
 * @property int|null $ESTCON
 * @property string|null $FECCON
 * @property int|null $ESTOSI
 * @property string|null $FECOSI
 * @property int|null $TIPANB
 * @property float|null $SUPRES
 * @property float|null $PAGO
 * @property int|null $DESTIN
 * @property string|null $OBSERV
 * @property string|null $GCLOUD
 * @property int|null $id_usuario
 * @property string|null $departamento_aut
 * @property string|null $provincia_aut
 * @property string|null $distrito_aut
 * @property string|null $fecha_registro
 * @property string|null $FECONT
 * @property string|null $ANOTORG
 */
class Autorizacionesmod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autorizacionesmod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ASIGNA', 'TIPDOC', 'NOMDIS', 'CODACT', 'SITUAC', 'ESTMOD', 'ESTCON', 'ESTOSI', 'TIPANB', 'DESTIN', 'id_usuario'], 'integer'],
            [['FECLEG', 'FECINI', 'FECTER', 'FECCON', 'FECOSI', 'fecha_registro'], 'safe'],
            [['SUPAPR', 'SUPRES', 'PAGO'], 'number'],
            [['SEDDSC','NUMAUT', 'NOMTIT', 'NOMREL', 'NOMRELD','NRODOC','DNIRE', 'NOMCCN', 'DOCLEG', 'CODCAT', 'SECTOR', 'DOCTIT', 'NROPAR', 'NOMRGT', 'NUMRGT', 'RESOSI', 'FECMOD', 'FECONT', 'ANOTORG'], 'string', 'max' => 100],
            [['DNIREG'], 'string', 'max' => 8],
            [['OBSERV','departamento_aut','provincia_aut','distrito_aut', 'GCLOUD'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'SEDDSC' => 'Sede descentralizada que adminstra la autorizaci??n',
            'NUMAUT' => 'C??digo del contrato de la autorizaci??n',
            'FECONT' => 'Fecha de firma de contrato',
            'ANOTORG' => 'A??o en el que se otorg?? la concesi??n',
            'ASIGNA' => 'Espacio territorial donde se otorga la autorizacion',
            'NOMTIT' => 'Nombre del titular del predio privado o de la comunidad',
            'NOMREL' => 'Nombre del representante legal',
            'NOMRELD' => 'Nombre del representante legal 2',
            'TIPDOC' => 'Tipo de documento de identidad del titular o del representante legal',
            'NRODOC' => 'N??mero del documento del titular o del representante legal',
            'DNIRE' => 'DNI o RUC del representante legal 2',
            'NOMCCN' => 'Nombre de la comunidad o denominaci??n del predio',
            'DOCLEG' => 'Documento legal que aprueba la autorizaci??n',
            'FECLEG' => 'Fecha de documento de aprobaci??n',
            'CODCAT' => 'C??digo catastral del predio o comunidad',
            'SECTOR' => 'Sector en donde se encuentra el predio o comunidad',
            'NOMDIS' => 'Nombre del Distrito',
            'DOCTIT' => 'Documento que acredite la tenencia legal del predio',
            'NROPAR' => 'N??mero de Partida Registral del predio o comunidad en SUNARP',
            'SUPAPR' => 'Superficie aprobada (ha)',
            'CODACT' => 'C??digo de la actividad',
            'FECINI' => 'Fecha de inicio de la autorizaci??n',
            'FECTER' => 'Fecha de t??rmino de la autorizaci??n',
            'NOMRGT' => 'Nombre de regente que elabor?? documento de gesti??n',
            'NUMRGT' => 'N?? de licencia de regente que elabor?? documento de gesti??n',
            'DNIREG' => 'N?? de DNI del regente que elabor?? documento de gesti??n',
            'SITUAC' => 'Si se encuentra activa o inactiva de acuerdo a la ejecuci??n de sus actividades de aprovechamiento',
            'RESOSI' => 'Resoluci??n sancionadora emitida por OSINFOR',
            'ESTMOD' => 'N?? de la Resoluci??n sancionadora o medida cautelar emitida por la autoridad forestal competente o SERFOR ESTMOD: Estado de modificaci??n de ??rea',
            'FECMOD' => 'Fecha de estado de modificaci??n',
            'ESTCON' => 'Estado del t??tulo habilitante',
            'FECCON' => 'Fecha de estado del t??tulo habilitante',
            'ESTOSI' => 'Estado OSINFOR',
            'FECOSI' => 'Fecha de estado de OSINFOR',
            'TIPANB' => 'Tipo de Asociaciones',
            'SUPRES' => 'Superficie de reserva en cambio de uso (llenado solo para el cambio de uso)',
            'PAGO' => 'Pago por desbosque (llenado solo para el cambio de uso)',
            'DESTIN' => 'Destino de cobertura forestal',
            'OBSERV' => 'Llenar cualquier tipo de observaci??n significativa',
            'GCLOUD' => 'Link del expediente en la nube',
            'id_usuario' => 'Id Usuario',
            'departamento_aut' => 'Departamento',
            'provincia_aut' => 'Provincia',
            'distrito_aut' => 'Distrito',
            'fecha_registro' => 'Fecha Registro',
            
        ];
    }
}
