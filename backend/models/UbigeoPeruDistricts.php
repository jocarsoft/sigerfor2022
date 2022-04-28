<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ubigeo_peru_districts".
 *
 * @property string $id
 * @property string|null $name
 * @property string|null $province_id
 * @property string|null $department_id
 */
class UbigeoPeruDistricts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ubigeo_peru_districts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'string', 'max' => 6],
            [['name'], 'string', 'max' => 45],
            [['province_id'], 'string', 'max' => 4],
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
            'province_id' => 'Province ID',
            'department_id' => 'Department ID',
        ];
    }
}
