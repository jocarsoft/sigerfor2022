<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "especie".
 *
 * @property int $id
 * @property string|null $nombre_comun
 * @property string|null $nombre_cientifico
 * @property string|null $familia
 * @property int|null $id_categoria
 *
 * @property CategoryEspecie $categoria
 * @property EspeciePlan[] $especiePlans
 */
class Especie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'especie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_categoria'], 'integer'],
            [['nombre_comun', 'nombre_cientifico', 'familia'], 'string', 'max' => 100],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryEspecie::className(), 'targetAttribute' => ['id_categoria' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_comun' => 'Nombre Comun',
            'nombre_cientifico' => 'Nombre Cientifico',
            'familia' => 'Familia',
            'id_categoria' => 'Id Categoria',
        ];
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(CategoryEspecie::className(), ['id' => 'id_categoria']);
    }

    /**
     * Gets query for [[EspeciePlans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspeciePlans()
    {
        return $this->hasMany(EspeciePlan::className(), ['id_especie' => 'id']);
    }
}
