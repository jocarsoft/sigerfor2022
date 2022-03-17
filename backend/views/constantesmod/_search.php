<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConstantesmodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constantesmod-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'CODE') ?>

    <?= $form->field($model, 'DESCRIPCION') ?>

    <?= $form->field($model, 'CAMPO') ?>

    <?= $form->field($model, 'TABLA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
