<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $username
 * @property string $password
 * @property string|null $authkey
 * @property string|null $accesstoken
 *
 * @property Guia[] $guias
 * @property PlanesManejo[] $planesManejos
 * @property Regente[] $regentes
 */
class Usuarios extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'username', 'password'], 'required'],
            [['authkey', 'accesstoken'], 'string'],
            [['nombres'], 'string', 'max' => 100],
            [['apellidos'], 'string', 'max' => 150],
            [['username'], 'string', 'max' => 200],
            [['password'], 'string', 'max' => 300],
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
            'username' => 'Usuario',
            'password' => 'Password',
            'authkey' => 'Authkey',
            'accesstoken' => 'Accesstoken',
        ];
    }

    /**
     * Gets query for [[Guias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGuias()
    {
        return $this->hasMany(Guia::className(), ['id_usuario' => 'id']);
    }

    /**
     * Gets query for [[PlanesManejos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanesManejos()
    {
        return $this->hasMany(PlanesManejo::className(), ['id_usuario' => 'id']);
    }

    /**
     * Gets query for [[Regentes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegentes()
    {
        return $this->hasMany(Regente::className(), ['id_usuario' => 'id']);
    }

    
     /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       

        return self::findOne(["accesstoken" =>$token]);
    }

    public static function findByUsername($username)
    {

        return self::findOne(["username" =>$username]);
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->authkey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

}
