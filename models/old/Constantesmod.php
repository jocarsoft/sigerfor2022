<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "constantes".
 *
 * @property int $id
 * @property string|null $CODE
 * @property string|null $DESCRIPCION
 * @property string|null $CAMPO
 * @property string|null $TABLA
 */
class Constantesmod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'constantes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CODE', 'DESCRIPCION', 'CAMPO', 'TABLA'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CODE' => 'Code',
            'DESCRIPCION' => 'Descripcion',
            'CAMPO' => 'Campo',
            'TABLA' => 'Tabla',
        ];
    }
}
