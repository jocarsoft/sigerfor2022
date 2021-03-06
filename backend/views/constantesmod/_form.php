<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Constantesmod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constantesmod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESCRIPCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CAMPO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TABLA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
