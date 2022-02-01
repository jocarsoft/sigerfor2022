<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_especie".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $denominacion
 * @property float|null $valor
 *
 * @property Especie[] $especies
 */
class CategoryEspecie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_especie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor'], 'number'],
            [['nombre', 'denominacion'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'denominacion' => 'Denominacion',
            'valor' => 'Valor',
        ];
    }

    /**
     * Gets query for [[Especies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecies()
    {
        return $this->hasMany(Especie::className(), ['id_categoria' => 'id']);
    }
}
