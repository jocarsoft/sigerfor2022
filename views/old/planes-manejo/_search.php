<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesManejoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planes-manejo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?php // $form->field($model, 'id') ?>

<?php // $form->field($model, 'id_th') ?>

    <?php //= $form->field($model, 'tipth') ?>

    <?= $form->field($model, 'contrato') ?>

    <?php // $form->field($model, 'fecsol') ?>

    <?php // echo $form->field($model, 'fecio') ?>

    <?php // echo $form->field($model, 'fecita') ?>

    <?php // echo $form->field($model, 'tdleg') ?>

    <?php // echo $form->field($model, 'docleg') ?>

    <?php // echo $form->field($model, 'fecleg') ?>

    <?php // echo $form->field($model, 'nomdis') ?>

    <?php // echo $form->field($model, 'docges') ?>

    <?php // echo $form->field($model, 'tipge') ?>

    <?php // echo $form->field($model, 'nump') ?>

    <?php // echo $form->field($model, 'fecini') ?>

    <?php // echo $form->field($model, 'fecter') ?>

    <?php // echo $form->field($model, 'supapr') ?>

    <?php // echo $form->field($model, 'volapr') ?>

    <?php // echo $form->field($model, 'unimed') ?>

    <?php // echo $form->field($model, 'finali') ?>

    <?php // echo $form->field($model, 'id_regente') ?>

    <?php // echo $form->field($model, 'numrgt') ?>

    <?php // echo $form->field($model, 'nomrgt') ?>

    <?php // echo $form->field($model, 'dnirgt') ?>

    <?php // echo $form->field($model, 'respau') ?>

    <?php // echo $form->field($model, 'rester') ?>

    <?php // echo $form->field($model, 'seresu') ?>

    <?php // echo $form->field($model, 'mmulta') ?>

    <?php // echo $form->field($model, 'observ') ?>

    <?php // echo $form->field($model, 'gcloud') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
