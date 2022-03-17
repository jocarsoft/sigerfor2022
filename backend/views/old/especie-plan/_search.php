<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EspeciePlanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="especie-plan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_plan') ?>

    <?= $form->field($model, 'id_especie') ?>

    <?= $form->field($model, 'resapr') ?>

    <?= $form->field($model, 'docges') ?>

    <?php // echo $form->field($model, 'tipdge') ?>

    <?php // echo $form->field($model, 'numpo') ?>

    <?php // echo $form->field($model, 'parco') ?>

    <?php // echo $form->field($model, 'produc') ?>

    <?php // echo $form->field($model, 'nomcom') ?>

    <?php // echo $form->field($model, 'nomcie') ?>

    <?php // echo $form->field($model, 'canesp') ?>

    <?php // echo $form->field($model, 'volapr') ?>

    <?php // echo $form->field($model, 'unimed') ?>

    <?php // echo $form->field($model, 'observ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
