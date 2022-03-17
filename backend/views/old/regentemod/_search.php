<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegentemodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="regente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?php // echo $form->field($model, 'id') ?>

    <?= $form->field($model, 'contrato') ?>

    <?php // echo $form->field($model, 'docleg') ?>

    <?php // echo $form->field($model, 'numrgt') ?>

    <?php // echo $form->field($model, 'nomrgt') ?>

    <?php // echo $form->field($model, 'dni') ?>

    <?php // echo $form->field($model, 'fecini') ?>

    <?php // echo $form->field($model, 'fecter') ?>

    <?php // echo $form->field($model, 'observ') ?>

    <?php // echo $form->field($model, 'id_usuario') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?php // echo Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
