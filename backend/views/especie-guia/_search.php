<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EspecieGuiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especie-guia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_guia') ?>

    <?= $form->field($model, 'id_especie_plan') ?>

    <?= $form->field($model, 'produc') ?>

    <?= $form->field($model, 'canpie') ?>

    <?php // echo $form->field($model, 'nomcom') ?>

    <?php // echo $form->field($model, 'nomcie') ?>

    <?php // echo $form->field($model, 'voltot') ?>

    <?php // echo $form->field($model, 'unimed') ?>

    <?php // echo $form->field($model, 'observ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
