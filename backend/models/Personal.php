<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $username
 * @property string|null $password
 * @property string|null $accesstoken
 * @property string|null $authkey
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['accesstoken', 'authkey'], 'string'],
            [['nombres', 'apellidos', 'username'], 'string', 'max' => 200],
            [['password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'username' => 'Username',
            'password' => 'Password',
            'accesstoken' => 'Accesstoken',
            'authkey' => 'Authkey',
        ];
    }
}
