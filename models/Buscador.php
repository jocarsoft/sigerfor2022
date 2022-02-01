<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Buscador extends Model
{
    public $buscar;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // buscar are both required
            [['buscar'], 'required'],
         
        ];
    }
}