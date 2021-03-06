<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "concesionesmod".
 *
 * @property int $id
 * @property string|null $RESREG
 * @property string|null $FECREG
 * @property string|null $CONTRA
 * @property int|null $TIPCON
 * @property string|null $FECONT
 * @property int|null $ADENDA
 * @property string|null $NOMTIT
 * @property string|null $NUMRUC
 * @property string|null $NOMREL
 * @property string|null $NOMRELU
 * @property string|null $NOMRELD
 * @property string|null $DNIRE 
 * @property string|null $DNIRED
 * @property string|null $TIPDOC
 * @property string|null $NRODOC
 * @property int|null $PROCOT
 * @property int|null $CONCUR
 * @property float|null $SUPAPR
 * @property string|null $SECTOR
 * @property string|null $NOMDIS
 * @property string|null $SEDDSC
 * @property string|null $DOCLEG
 * @property string|null $FECLEG
 * @property int|null $ANOTORG
 * @property string|null $UNIAPR
 * @property string|null $FECINI
 * @property string|null $FECTER
 * @property string|null $CODACT
 * @property int|null $FINALI
 * @property int|null $OBJCON
 * @property float|null $PAGODA
 * @property int|null $TIPAGO
 * @property int|null $ESTCON
 * @property int|null $SITUAC
 * @property int|null $ESTARE
 * @property string|null $RESAUT
 * @property int|null $ESTOSI
 * @property string|null $RESOSI
 * @property string|null $FECOSI
 * @property string|null $RDOCAD
 * @property string|null $FECCAD
 * @property string|null $OBSERV
 * @property string|null $GCLOUD
 * @property int|null $id_usuario
 * @property string|null $departamento_co
 * @property string|null $provincia_co
 * @property string|null $distrito_co
 * @property string|null $fecha_registro * 
 */
class Concesionesmod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'concesionesmod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TIPCON', 'ADENDA', 'PROCOT', 'CONCUR', 'ANOTORG', 'FINALI', 'OBJCON', 'TIPAGO', 'ESTCON', 'SITUAC', 'ESTARE', 'ESTOSI', 'id_usuario'], 'integer'],
            [['FECONT', 'FECLEG', 'FECINI', 'FECTER', 'FECOSI', 'FECCAD', 'fecha_registro'], 'safe'],
            [['SUPAPR', 'PAGODA'], 'number'],
            [['RESREG', 'FECREG', 'CONTRA', 'NOMTIT', 'NOMREL','NOMRELU','NOMRELD', 'TIPDOC', 'NRODOC', 'DNIRE', 'DNIRED','SECTOR', 'NOMDIS', 'SEDDSC', 'DOCLEG', 'UNIAPR', 'CODACT', 'RESAUT', 'RESOSI', 'RDOCAD'], 'string', 'max' => 100],
            [['NUMRUC'], 'string', 'max' => 11],
            [['OBSERV', 'GCLOUD','departamento_co','provincia_co','distrito_co'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'RESREG' => 'Resreg',
            'FECREG' => 'Fecreg',
            'CONTRA' => 'C??digo de contrato',
            'TIPCON' => 'Tip de concesiones',
            'FECONT' => 'Fecha de firma de contrato',
            'ADENDA' => 'Indica si tiene adenda',
            'NOMTIT' => '(Persona Natural) del titular de concesi??n',
            'NUMRUC' => 'N??mero de RUC del titular',
            'NOMREL' => 'Nombre del representante legal ',
            'NOMRELU' => 'Nombre del representante legal 2',
            'NOMRELD' => 'Nombre del representante legal 3',
            'DNIRE' => 'DNI O RUC del representante legal 2 ',
            'DNIRED' => 'DNI O RUC del representante legal 3 ',
            'TIPDOC' => 'Tipo de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jur??dica)',
            'NRODOC' => 'N??mero de documento de identidad del titular (Si es persona natural) o del representante legal (si es persona jur??dica)',
            'PROCOT' => 'Modalidad de entrega de contrato',
            'CONCUR' => 'N??mero de concurso o procedimiento abreviado que fue otorgada la concesi??n ( Solo para el caso de concesiones maderables)',
            'SUPAPR' => 'Superficie total aprobada (ha)',
            'SECTOR' => 'Nombre(s) de sector(es)',
            'NOMDIS' => 'Nombre del distrito',
            'SEDDSC' => 'Sede descentralizada que administra la autorizaci??n',
            'DOCLEG' => 'Resolucion de otorgamiento',
            'FECLEG' => 'Fecha de emision de la resolucion de otorgamiento',
            'ANOTORG' => 'A??o en el que se otorg?? la concesi??n',
            'UNIAPR' => 'Unidad(es) de aprovechamiento',
            'FECINI' => 'Fecha de inicio de vigencia de la concesi??n',
            'FECTER' => 'Fecha de termino de vigencia de la concesi??n',
            'CODACT' => 'Codigo de activiadad de la concesi??n',
            'FINALI' => 'Finalidad de la plantaci??n (Para el caso de concesiones de plantaciones)',
            'OBJCON' => 'Objeto de la concesi??n de conservaci??n (solo para concesiones de conservaci??n)',
            'PAGODA' => 'Monto de pago anual por derecho de aprovechamientoSolo para Concesiones para  Ecoturismo y Concesiones para productos forestales diferentes a la maderade)',
            'TIPAGO' => 'Tipo de modalidad de pago (Solo para concesiones maderables)',
            'ESTCON' => 'Estado contractual del t??tulo habilitante',
            'SITUAC' => 'Si se encuentra activa o inactiva de acuerdo a la ejecuci??n de sus actividades de aprovechamiento',
            'ESTARE' => 'Estado de la superficie',
            'RESAUT' => 'N??mero de resolucion sancionadora o medida cautelar por la ARFFS',
            'ESTOSI' => 'Estado segun OSINFOR',
            'RESOSI' => 'N??mero de resoluci??n sancionadora emitida por OSINFOR',
            'FECOSI' => 'Fecha de resolucui??n sancionadora de OSINFOR',
            'RDOCAD' => 'Resoluci??n de caducidad de OSINFOR',
            'FECCAD' => 'Fecha de caducidad de OSINFOR',
            'OBSERV' => 'Observaciones',
            'GCLOUD' => 'Link de expediente en la nueba',
            'id_usuario' => 'Id Usuario',
            'fecha_registro' => 'Fecha Registro',
            'departamento_co' => 'Departamento',
            'provincia_co' => 'Provincia',
            'distrito_co' => 'Distrito',
        ];
    }
}
