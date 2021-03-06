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
 * @property string|null $DNIRE 
 * @property string|null $DNIRED
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
 * @proty string|null $departamento_per
 * @proty string|null $provincia_per
 * @proty string|null $distrito_per
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
            [['SEDDSC', 'NUMPER', 'NOMTIT', 'NOMREL','NOMRELU','NOMRELD', 'NRODOC', 'DNIRE', 'DNIRED','DOMIC', 'NOMCCN', 'CODCAT', 'NROPAR', 'SECTOR', 'NOMDIS', 'DOCLEG', 'RESAUT', 'RESOSI', 'OBSERV'], 'string', 'max' => 100],
            [['ASIGNA','departamento_per','provincia_per','distrito_per','GCLOUD'], 'string', 'max' => 200],
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
            'NUMPER' => 'C??digo del permiso',
            'FECONT' => 'Fecha de firma de contrato',
            'ANOTORG' => 'A??o en el que se otorg?? la concesi??n',
            'ASIGNA' => 'Asigna Espacio territorial donde se otorga el permiso',
            'NOMTIT' => 'Raz??n Social (Persona Jur??dica)  o Nombre (Persona natural) del titular del permiso',
            'NUMRUC' => 'N??mero de RUC del titular',
            'NOMREL' => 'Nombre del Representante legal ',
            'NOMRELU' => 'Nombre del Representante legal 2',
            'NOMRELD' => 'Nombre del Representante legal 3',
            'DNIRE' => 'DNI O RUC del representante legal 2 ',
            'DNIRED' => 'DNI O RUC del representante legal 3 ',
            'TIPDOC' => 'Tipo de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jur??dica)',
            'NRODOC' => 'N??mero de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jur??dica)',
            'DOMIC' => 'Domicilio para notificaci??n',
            'NOMCCN' => 'Nombre de la comunidad o denominaci??n del predio',
            'CODCAT' => 'C??digo catastral del predio de existir',
            'CATPER' => 'Categor??a de Permiso',
            'CODACT' => 'Nombre de la actividad',
            'NROPAR' => 'N??mero de Partida Registral del predio o comunidad en SUNARP',
            'DOCTIT' => 'Documento que acredite la tenencia legal de la comunidad o predio',
            'SUPAPR' => 'Superficie aprobada (ha)',
            'SECTOR' => 'Nombre(s) de sector(es)',
            'NIVAPR' => 'Nivel de aprovechamiento',
            'NOMDIS' => 'Nombre del Distrito',
            'TDLEG' => 'Tipo de documento legal',
            'DOCLEG' => 'N??mero de la resoluci??n que otorga el permiso',
            'FECLEG' => 'Fecha de emisi??n de la resoluci??n de otorgamiento',
            'FECINI' => 'Fecha de inicio de vigencia de la concesi??n',
            'EXTEN' => '??Cuenta con una solicitud de reingreso, movilizaci??n de saldos u otro documento que extienda el per??odo de vigencia del permiso?',
            'FECTER' => 'Fecha de termino del permiso',
            'SITUAC' => 'Seleccione si el estado del permiso de acuerdo a la ejecuci??n de sus actividades de aprovechamiento',
            'ESTCON' => 'Estado contractual del permiso',
            'RESAUT' => 'Resoluci??n sancionadora o medida cautelar emitida por la ARFFS competente',
            'FECON' => 'Fecha de la emisi??n de la resoluci??n sancionadora o medida cautelar de la ARFFS competente',
            'ESTOSI' => 'Estado seg??n OSINFOR',
            'RESOSI' => 'N??mero de resoluci??n sancionadora emitida por OSINFOR',
            'FECOSI' => 'Fecha de  la resoluci??n sancionadora de OSINFOR',
            'OBSERV' => 'Observaciones',
            'GCLOUD' => 'Link del expediente en la nube',
            'id_usuario' => 'Id Usuario',
            'departamento_per' => 'Departamento',
            'provincia_per' => 'Provincia',
            'distrito_per' => 'Distrito',
            'fecha_registro' => 'Fecha Registro',
            
        ];
    }
}
