<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AutorizacionesmodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autorizacionesmod-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'id') ?>

    <?php // echo $form->field($model, 'SEDDSC') ?>

    <?= $form->field($model, 'NUMAUT') ?>

    <?php // echo $form->field($model, 'ASIGNA') ?>

    <?php // echo $form->field($model, 'NOMTIT') ?>

    <?php // echo $form->field($model, 'NOMREL') ?>

    <?php // echo $form->field($model, 'TIPDOC') ?>

    <?php // echo $form->field($model, 'NRODOC') ?>

    <?php // echo $form->field($model, 'NOMCCN') ?>

    <?php // echo $form->field($model, 'DOCLEG') ?>

    <?php // echo $form->field($model, 'FECLEG') ?>

    <?php // echo $form->field($model, 'CODCAT') ?>

    <?php // echo $form->field($model, 'SECTOR') ?>

    <?php // echo $form->field($model, 'NOMDIS') ?>

    <?php // echo $form->field($model, 'DOCTIT') ?>

    <?php // echo $form->field($model, 'NROPAR') ?>

    <?php // echo $form->field($model, 'SUPAPR') ?>

    <?php // echo $form->field($model, 'CODACT') ?>

    <?php // echo $form->field($model, 'FECINI') ?>

    <?php // echo $form->field($model, 'FECTER') ?>

    <?php // echo $form->field($model, 'NOMRGT') ?>

    <?php // echo $form->field($model, 'NUMRGT') ?>

    <?php // echo $form->field($model, 'DNIREG') ?>

    <?php // echo $form->field($model, 'SITUAC') ?>

    <?php // echo $form->field($model, 'RESOSI') ?>

    <?php // echo $form->field($model, 'ESTMOD') ?>

    <?php // echo $form->field($model, 'FECMOD') ?>

    <?php // echo $form->field($model, 'ESTCON') ?>

    <?php // echo $form->field($model, 'FECCON') ?>

    <?php // echo $form->field($model, 'ESTOSI') ?>

    <?php // echo $form->field($model, 'FECOSI') ?>

    <?php // echo $form->field($model, 'TIPANB') ?>

    <?php // echo $form->field($model, 'SUPRES') ?>

    <?php // echo $form->field($model, 'PAGO') ?>

    <?php // echo $form->field($model, 'DESTIN') ?>

    <?php // echo $form->field($model, 'OBSERV') ?>

    <?php // echo $form->field($model, 'GCLOUD') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'FECONT') ?>

    <?php // echo $form->field($model, 'ANOTORG') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
