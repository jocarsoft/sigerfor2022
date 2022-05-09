<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConcesionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concesionesmod-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'RESREG') ?>

    <?= $form->field($model, 'FECREG') ?>

    <?= $form->field($model, 'CONTRA') ?>

    <?= $form->field($model, 'TIPCON') ?>

    <?php // echo $form->field($model, 'FECONT') ?>

    <?php // echo $form->field($model, 'ADENDA') ?>

    <?php // echo $form->field($model, 'NOMTIT') ?>

    <?php // echo $form->field($model, 'NUMRUC') ?>

    <?php // echo $form->field($model, 'NOMREL') ?>

    <?php // echo $form->field($model, 'NOMRELU') ?>

    <?php // echo $form->field($model, 'NOMRELD') ?>

    <?php // echo $form->field($model, 'TIPDOC') ?>

    <?php // echo $form->field($model, 'NRODOC') ?>

    <?php // echo $form->field($model, 'PROCOT') ?>

    <?php // echo $form->field($model, 'CONCUR') ?>

    <?php // echo $form->field($model, 'SUPAPR') ?>

    <?php // echo $form->field($model, 'SECTOR') ?>

    <?php // echo $form->field($model, 'NOMDIS') ?>

    <?php // echo $form->field($model, 'SEDDSC') ?>

    <?php // echo $form->field($model, 'DOCLEG') ?>

    <?php // echo $form->field($model, 'FECLEG') ?>

    <?php // echo $form->field($model, 'ANOTORG') ?>

    <?php // echo $form->field($model, 'UNIAPR') ?>

    <?php // echo $form->field($model, 'FECINI') ?>

    <?php // echo $form->field($model, 'FECTER') ?>

    <?php // echo $form->field($model, 'CODACT') ?>

    <?php // echo $form->field($model, 'FINALI') ?>

    <?php // echo $form->field($model, 'OBJCON') ?>

    <?php // echo $form->field($model, 'PAGODA') ?>

    <?php // echo $form->field($model, 'TIPAGO') ?>

    <?php // echo $form->field($model, 'ESTCON') ?>

    <?php // echo $form->field($model, 'SITUAC') ?>

    <?php // echo $form->field($model, 'ESTARE') ?>

    <?php // echo $form->field($model, 'RESAUT') ?>

    <?php // echo $form->field($model, 'ESTOSI') ?>

    <?php // echo $form->field($model, 'RESOSI') ?>

    <?php // echo $form->field($model, 'FECOSI') ?>

    <?php // echo $form->field($model, 'RDOCAD') ?>

    <?php // echo $form->field($model, 'FECCAD') ?>

    <?php // echo $form->field($model, 'OBSERV') ?>

    <?php // echo $form->field($model, 'GCLOUD') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <?php // echo $form->field($model, 'departamento_co') ?>
    <?php // echo $form->field($model, 'provincia_co') ?>
    <?php // echo $form->field($model, 'distrito_co') ?>



    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
