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
            [['SEDDSC','NUMAUT', 'NOMTIT', 'NOMREL', 'NRODOC', 'NOMCCN', 'DOCLEG', 'CODCAT', 'SECTOR', 'DOCTIT', 'NROPAR', 'NOMRGT', 'NUMRGT', 'RESOSI', 'FECMOD', 'FECONT', 'ANOTORG'], 'string', 'max' => 100],
            [['DNIREG'], 'string', 'max' => 8],
            [['OBSERV', 'GCLOUD'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'SEDDSC' => 'Sede descentralizada que adminstra la autorización',
            'NUMAUT' => 'Código del contrato de la autorización',
            'FECONT' => 'Fecha de firma de contrato',
            'ANOTORG' => 'Año en el que se otorgó la concesión',
            'ASIGNA' => 'Espacio territorial donde se otorga la autorizacion',
            'NOMTIT' => 'Nombre del titular del predio privado o de la comunidad',
            'NOMREL' => 'Nombre del representante legal',
            'TIPDOC' => 'Tipo de documento de identidad del titular o del representante legal',
            'NRODOC' => 'Número del documento del titular o del representante legal',
            'NOMCCN' => 'Nombre de la comunidad o denominación del predio',
            'DOCLEG' => 'Documento legal que aprueba la autorización',
            'FECLEG' => 'Fecha de documento de aprobación',
            'CODCAT' => 'Código catastral del predio o comunidad',
            'SECTOR' => 'Sector en donde se encuentra el predio o comunidad',
            'NOMDIS' => 'Nombre del Distrito',
            'DOCTIT' => 'Documento que acredite la tenencia legal del predio',
            'NROPAR' => 'Número de Partida Registral del predio o comunidad en SUNARP',
            'SUPAPR' => 'Superficie aprobada (ha)',
            'CODACT' => 'Código de la actividad',
            'FECINI' => 'Fecha de inicio de la autorización',
            'FECTER' => 'Fecha de término de la autorización',
            'NOMRGT' => 'Nombre de regente que elaboró documento de gestión',
            'NUMRGT' => 'N° de licencia de regente que elaboró documento de gestión',
            'DNIREG' => 'N° de DNI del regente que elaboró documento de gestión',
            'SITUAC' => 'Si se encuentra activa o inactiva de acuerdo a la ejecución de sus actividades de aprovechamiento',
            'RESOSI' => 'Resolución sancionadora emitida por OSINFOR',
            'ESTMOD' => 'Nº de la Resolución sancionadora o medida cautelar emitida por la autoridad forestal competente o SERFOR ESTMOD: Estado de modificación de área',
            'FECMOD' => 'Fecha de estado de modificación',
            'ESTCON' => 'Estado del título habilitante',
            'FECCON' => 'Fecha de estado del título habilitante',
            'ESTOSI' => 'Estado OSINFOR',
            'FECOSI' => 'Fecha de estado de OSINFOR',
            'TIPANB' => 'Tipo de Asociaciones',
            'SUPRES' => 'Superficie de reserva en cambio de uso (llenado solo para el cambio de uso)',
            'PAGO' => 'Pago por desbosque (llenado solo para el cambio de uso)',
            'DESTIN' => 'Destino de cobertura forestal',
            'OBSERV' => 'Llenar cualquier tipo de observación significativa',
            'GCLOUD' => 'Link del expediente en la nube',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
            
        ];
    }
}
