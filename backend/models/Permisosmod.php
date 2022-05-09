<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "permisosmod".
 *
 * @property int $id
 * @property string|null $SEDDSC
 * @property string|null $NUMPER
 * @property string|null $ASIGNA
 * @property string|null $NOMTIT
 * @property int|null $NUMRUC
 * @property string|null $NOMREL
 * @property string|null $NOMRELU
 * @property string|null $NOMRELD
 * @property int|null $TIPDOC
 * @property string|null $NRODOC
 * @property string|null $DOMIC
 * @property string|null $NOMCCN
 * @property string|null $CODCAT
 * @property int|null $CATPER
 * @property int|null $CODACT
 * @property string|null $NROPAR
 * @property int|null $DOCTIT
 * @property float|null $SUPAPR
 * @property string|null $SECTOR
 * @property int|null $NIVAPR
 * @property string|null $NOMDIS
 * @property int|null $TDLEG
 * @property string|null $DOCLEG
 * @property string|null $FECLEG
 * @property string|null $FECINI
 * @property int|null $EXTEN
 * @property string|null $FECTER
 * @property int|null $SITUAC
 * @property int|null $ESTCON
 * @property string|null $RESAUT
 * @property string|null $FECON
 * @property int|null $ESTOSI
 * @property string|null $RESOSI
 * @property string|null $FECOSI
 * @property string|null $OBSERV
 * @property string|null $GCLOUD
 * @property int|null $id_usuario
 * @property string|null $fecha_registro
 * @property string|null $FECONT
 * @property string|null $ANOTORG
 */
class Permisosmod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permisosmod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NUMRUC', 'TIPDOC', 'CATPER', 'CODACT', 'DOCTIT', 'NIVAPR', 'TDLEG', 'EXTEN', 'SITUAC', 'ESTCON', 'ESTOSI', 'id_usuario'], 'integer'],
            [['SUPAPR'], 'number'],
            [['FECLEG', 'FECINI', 'FECTER', 'FECON', 'FECOSI', 'fecha_registro'], 'safe'],
            [['SEDDSC', 'NUMPER', 'NOMTIT', 'NOMREL','NOMRELU','NOMRELD', 'NRODOC', 'DOMIC', 'NOMCCN', 'CODCAT', 'NROPAR', 'SECTOR', 'NOMDIS', 'DOCLEG', 'RESAUT', 'RESOSI', 'OBSERV'], 'string', 'max' => 100],
            [['ASIGNA','GCLOUD'], 'string', 'max' => 200],
            [['FECONT', 'ANOTORG'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'SEDDSC' => 'Sede descentralizada que adminstra el permiso',
            'NUMPER' => 'Código del permiso',
            'FECONT' => 'Fecha de firma de contrato',
            'ANOTORG' => 'Año en el que se otorgó la concesión',
            'ASIGNA' => 'Asigna Espacio territorial donde se otorga el permiso',
            'NOMTIT' => 'Razón Social (Persona Jurídica)  o Nombre (Persona natural) del titular del permiso',
            'NUMRUC' => 'Número de RUC del titular',
            'NOMREL' => 'Nombre del Representante legal 1',
            'NOMRELU' => 'Nombre del Representante legal 2',
            'NOMRELD' => 'Nombre del Representante legal 3',
            'TIPDOC' => 'Tipo de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jurídica)',
            'NRODOC' => 'Número de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jurídica)',
            'DOMIC' => 'Domicilio para notificación',
            'NOMCCN' => 'Nombre de la comunidad o denominación del predio',
            'CODCAT' => 'Código catastral del predio de existir',
            'CATPER' => 'Categoría de Permiso',
            'CODACT' => 'Nombre de la actividad',
            'NROPAR' => 'Número de Partida Registral del predio o comunidad en SUNARP',
            'DOCTIT' => 'Documento que acredite la tenencia legal de la comunidad o predio',
            'SUPAPR' => 'Superficie aprobada (ha)',
            'SECTOR' => 'Nombre(s) de sector(es)',
            'NIVAPR' => 'Nivel de aprovechamiento',
            'NOMDIS' => 'Nombre del Distrito',
            'TDLEG' => 'Tipo de documento legal',
            'DOCLEG' => 'Número de la resolución que otorga el permiso',
            'FECLEG' => 'Fecha de emisión de la resolución de otorgamiento',
            'FECINI' => 'Fecha de inicio de vigencia de la concesión',
            'EXTEN' => '¿Cuenta con una solicitud de reingreso, movilización de saldos u otro documento que extienda el período de vigencia del permiso?',
            'FECTER' => 'Fecha de termino del permiso',
            'SITUAC' => 'Seleccione si el estado del permiso de acuerdo a la ejecución de sus actividades de aprovechamiento',
            'ESTCON' => 'Estado contractual del permiso',
            'RESAUT' => 'Resolución sancionadora o medida cautelar emitida por la ARFFS competente',
            'FECON' => 'Fecha de la emisión de la resolución sancionadora o medida cautelar de la ARFFS competente',
            'ESTOSI' => 'Estado según OSINFOR',
            'RESOSI' => 'Número de resolución sancionadora emitida por OSINFOR',
            'FECOSI' => 'Fecha de  la resolución sancionadora de OSINFOR',
            'OBSERV' => 'Observaciones',
            'GCLOUD' => 'Link del expediente en la nube',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
            
        ];
    }
}
