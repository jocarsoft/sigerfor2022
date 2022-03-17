<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PermisosmodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permisosmod-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'SEDDSC') ?>

    <?= $form->field($model, 'NUMPER') ?>

    <?= $form->field($model, 'ASIGNA') ?>

    <?= $form->field($model, 'NOMTIT') ?>

    <?php // echo $form->field($model, 'NUMRUC') ?>

    <?php // echo $form->field($model, 'NOMREL') ?>

    <?php // echo $form->field($model, 'TIPDOC') ?>

    <?php // echo $form->field($model, 'NRODOC') ?>

    <?php // echo $form->field($model, 'DOMIC') ?>

    <?php // echo $form->field($model, 'NOMCCN') ?>

    <?php // echo $form->field($model, 'CODCAT') ?>

    <?php // echo $form->field($model, 'CATPER') ?>

    <?php // echo $form->field($model, 'CODACT') ?>

    <?php // echo $form->field($model, 'NROPAR') ?>

    <?php // echo $form->field($model, 'DOCTIT') ?>

    <?php // echo $form->field($model, 'SUPAPR') ?>

    <?php // echo $form->field($model, 'SECTOR') ?>

    <?php // echo $form->field($model, 'NIVAPR') ?>

    <?php // echo $form->field($model, 'NOMDIS') ?>

    <?php // echo $form->field($model, 'TDLEG') ?>

    <?php // echo $form->field($model, 'DOCLEG') ?>

    <?php // echo $form->field($model, 'FECLEG') ?>

    <?php // echo $form->field($model, 'FECINI') ?>

    <?php // echo $form->field($model, 'EXTEN') ?>

    <?php // echo $form->field($model, 'FECTER') ?>

    <?php // echo $form->field($model, 'SITUAC') ?>

    <?php // echo $form->field($model, 'ESTCON') ?>

    <?php // echo $form->field($model, 'RESAUT') ?>

    <?php // echo $form->field($model, 'FECON') ?>

    <?php // echo $form->field($model, 'ESTOSI') ?>

    <?php // echo $form->field($model, 'RESOSI') ?>

    <?php // echo $form->field($model, 'FECOSI') ?>

    <?php // echo $form->field($model, 'OBSERV') ?>

    <?php // echo $form->field($model, 'GCLOUD') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'FECONT') ?>

    <?php // echo $form->field($model, 'ANOTORG') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
