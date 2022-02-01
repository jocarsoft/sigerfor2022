<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TituloHabilitanteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="titulo-habilitante-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sede') ?>

    <?= $form->field($model, 'tipo_contrato') ?>

    <?= $form->field($model, 'contrato') ?>

    <?= $form->field($model, 'nombre_titular') ?>

    <?php // echo $form->field($model, 'superficie') ?>

    <?php // echo $form->field($model, 'situacion') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'distrito') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'anhio_otorgado') ?>

    <?php // echo $form->field($model, 'fecha_contrato') ?>

    <?php // echo $form->field($model, 'gerforcloud') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
