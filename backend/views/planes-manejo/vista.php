<?php

use yii\helpers\Html;
?>

<?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>



<div class="row">

    <div class="col-4">

<?= $form->field($model,'buscar', [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text"></div></div>',
    'template' => '{beginWrapper}{input}{error}{endWrapper}',
    'wrapperOptions' => ['class' => 'input-group mb-3']
])
    ->label(false)
    ->textInput(['placeholder' => $model->getAttributeLabel('buscar')]) ?>


        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary btn-block']) ?>
    </div>
</div>

<?php \yii\bootstrap4\ActiveForm::end(); ?>