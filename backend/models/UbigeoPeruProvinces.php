<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ubigeo_peru_provinces".
 *
 * @property string $id
 * @property string $name
 * @property string $department_id
 */
class UbigeoPeruProvinces extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubigeo_peru_provinces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'department_id'], 'required'],
            [['id'], 'string', 'max' => 4],
            [['name'], 'string', 'max' => 45],
            [['department_id'], 'string', 'max' => 2],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'department_id' => 'Department ID',
        ];
    }
}
