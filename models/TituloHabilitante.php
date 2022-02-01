<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titulo_habilitante".
 *
 * @property int $id
 * @property string|null $sede
 * @property string|null $tipo_contrato
 * @property string|null $contrato
 * @property string|null $nombre_titular
 * @property float|null $superficie
 * @property string|null $situacion
 * @property string|null $estado
 * @property string|null $distrito
 * @property string|null $provincia
 * @property string|null $anhio_otorgado
 * @property string|null $fecha_contrato
 * @property string|null $gerforcloud
 *
 * @property PlanesManejo[] $planesManejos
 */
class TituloHabilitante extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'titulo_habilitante';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['superficie'], 'number'],
            [['fecha_contrato'], 'safe'],
            [['sede', 'tipo_contrato', 'contrato', 'situacion', 'estado', 'distrito', 'provincia', 'anhio_otorgado'], 'string', 'max' => 100],
            [['nombre_titular', 'gerforcloud'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sede' => 'Sede',
            'tipo_contrato' => 'Tipo Contrato',
            'contrato' => 'Contrato',
            'nombre_titular' => 'Nombre Titular',
            'superficie' => 'Superficie',
            'situacion' => 'Situacion',
            'estado' => 'Estado',
            'distrito' => 'Distrito',
            'provincia' => 'Provincia',
            'anhio_otorgado' => 'Año Otorgado',
            'fecha_contrato' => 'Fecha Contrato',
            'gerforcloud' => 'Gerforcloud',
        ];
    }

    /**
     * Gets query for [[PlanesManejos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanesManejos()
    {
        return $this->hasMany(PlanesManejo::className(), ['id_th' => 'id']);
    }
}
