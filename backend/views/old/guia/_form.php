<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;

/* @var $this yii\web\View */
/* @var $model app\models\Guia */
/* @var $form yii\widgets\ActiveForm */
?>

<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />
<link  rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>


<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Guía</strong></h2>
                <!--<p>Fill all form field to go to next step</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="paso1"><strong>Paso 1</strong></li>
                                <li id="paso2"><strong>Paso 2</strong></li>
                                <li id="paso3"><strong>Paso 3</strong></li>
                                <li id="paso4"><strong>Paso 4</strong></li>
                                <li id="paso5"><strong>Paso 5</strong></li>
                                <li id="confirm"><strong>Finalizar</strong></li>
                            </ul> <!-- fieldsets -->

                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'id_plan')->textInput() ?>
                                    <?php 
                                    //para crear campo combo
                                    $datos = Constantesmod::find()
                                    ->where(['campo' => 'clase_guia','tabla'=>'ddguia'])
                                    ->all();
                                    $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');

                                    echo $form->field($model, 'clase_guia')->dropDownList(
                                        $listData,
                                    ['prompt'=>'Seleccionar...']
                                        );    
                                    ?>
                                    <?= $form->field($model, 'numgtf')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'fecexp')->textInput() ?>
                                    <?= $form->field($model, 'fecter')->textInput() ?>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />

                            </fieldset>

                            <fieldset>
                                <div class="form-card">

                                    <?= $form ->field($model, 'modth')->dropDownList(     
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'MODTIH','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'codtih')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'docleg')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'docges')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DOCGES','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'numpo')->textInput(['maxlength' => true]) ?>
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'numpar')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'depro')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DEPPRO','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'seddsc')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'SEDDSC','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'prvpro')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'PRVPRO','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'dispro')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DISPRO','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>

                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'gtfori')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'depdes')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'prodes')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'disdes')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'tipper')->dropDownList(
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPER','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form ->field($model, 'tipdoc')->dropDownList(
        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDOC','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'numdoc')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'aperaz')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'apemat')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'tipgtf')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPGTF','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'medio')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'MEDIO','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>
                                                    
                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'plaveh')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'plarem')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'nomcon')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'numlic')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'facpag')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'observ')->textInput(['maxlength' => true]) ?>
                                    </div>   
                                    <div class="form-group">
                                    <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />  
                                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>    
                            </fieldset>

                        <?php ActiveForm::end(); ?>
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard_js.js"></script>
