<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bitacora".
 *
 * @property string $id_bit
 * @property string|null $accion
 * @property string|null $cond_dato
 * @property int|null $id_registro
 * @property string|null $tabla
 * @property string|null $usuario
 * @property string|null $fecha_hora
 */
class Bitacora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bitacora';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bit'], 'required'],
            [['id_registro'], 'integer'],
            [['fecha_hora'], 'safe'],
            [['id_bit'], 'string', 'max' => 10],
            [['accion'], 'string', 'max' => 200],
            [['cond_dato', 'usuario'], 'string', 'max' => 45],
            [['tabla'], 'string', 'max' => 100],
            [['id_bit'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bit' => 'Id Bit',
            'accion' => 'Accion',
            'cond_dato' => 'Cond Dato',
            'id_registro' => 'Id Registro',
            'tabla' => 'Tabla',
            'usuario' => 'Usuario',
            'fecha_hora' => 'Fecha Hora',
        ];
    }
}
