<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_plan') ?>

    <?= $form->field($model, 'clase_guia') ?>

    <?= $form->field($model, 'numgtf') ?>

    <?= $form->field($model, 'fecexp') ?>

    <?php // echo $form->field($model, 'fecter') ?>

    <?php // echo $form->field($model, 'modth') ?>

    <?php // echo $form->field($model, 'codtih') ?>

    <?php // echo $form->field($model, 'docleg') ?>

    <?php // echo $form->field($model, 'docges') ?>

    <?php // echo $form->field($model, 'numpo') ?>

    <?php // echo $form->field($model, 'numpar') ?>

    <?php // echo $form->field($model, 'depro') ?>

    <?php // echo $form->field($model, 'seddsc') ?>

    <?php // echo $form->field($model, 'prvpro') ?>

    <?php // echo $form->field($model, 'dispro') ?>

    <?php // echo $form->field($model, 'gtfori') ?>

    <?php // echo $form->field($model, 'depdes') ?>

    <?php // echo $form->field($model, 'prodes') ?>

    <?php // echo $form->field($model, 'disdes') ?>

    <?php // echo $form->field($model, 'tipper') ?>

    <?php // echo $form->field($model, 'tipdoc') ?>

    <?php // echo $form->field($model, 'numdoc') ?>

    <?php // echo $form->field($model, 'aperaz') ?>

    <?php // echo $form->field($model, 'apemat') ?>

    <?php // echo $form->field($model, 'nombre') ?>

    <?php // echo $form->field($model, 'tipgtf') ?>

    <?php // echo $form->field($model, 'medio') ?>

    <?php // echo $form->field($model, 'plaveh') ?>

    <?php // echo $form->field($model, 'plarem') ?>

    <?php // echo $form->field($model, 'nomcon') ?>

    <?php // echo $form->field($model, 'numlic') ?>

    <?php // echo $form->field($model, 'facpag') ?>

    <?php // echo $form->field($model, 'observ') ?>

    <?php // echo $form->field($model, 'gcloud') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
