<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;

/* @var $this yii\web\View */
/* @var $model app\models\Permisosmod */
/* @var $form yii\widgets\ActiveForm */
?>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />


<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Permisos</strong></h2>
                <!--<p>Fill all form field to go to next step</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <?php $form = ActiveForm::begin(); ?>
                        <!--<form id="msform">-->
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
                                    <?= $form->field($model, 'SEDDSC')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'NUMPER')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'FECONT')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'ANOTORG')->textInput(['maxlength' => true]) ?>
                                    <?php 
                                    //para crear campo combo
                                    $datos = Constantesmod::find()
                                    ->where(['campo' => 'ASIGNA','tabla' => 'ddpermisos'])
                                    ->all();
                                    $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');

                                    echo $form->field($model, 'ASIGNA')->dropDownList(
                                        $listData,
                                    ['prompt'=>'Seleccionar...']
                                        );    
                                    ?>
                                    <?= $form->field($model, 'NOMTIT')->textInput(['maxlength' => true]) ?>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    
                                    <?= $form->field($model, 'NUMRUC')->textInput() ?>
                                    <?= $form->field($model, 'NOMREL')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'TIPDOC')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDOC','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'NRODOC')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'DOMIC')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'NOMCCN')->textInput(['maxlength' => true]) ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'CODCAT')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'CATPER')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CATPER','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'CODACT')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CODACT','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'NROPAR')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'DOCTIT')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DOCTIT','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'SUPAPR')->textInput() ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                  
                                    <?= $form->field($model, 'SECTOR')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'NIVAPR')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'NIVAPR','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'NOMDIS')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'NOMDIS','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'TDLEG')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TDLEG','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'DOCLEG')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'FECLEG')->textInput() ?>

                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                   
                                    <?= $form->field($model, 'FECINI')->textInput() ?>
                                    <?= $form ->field($model, 'EXTEN')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'EXTEN','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'FECTER')->textInput() ?>
                                    <?= $form ->field($model, 'SITUAC')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'SITUAC','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'ESTCON')->dropDownList(
                                    ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTCON','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                    [
                                        'prompt'=>'Seleccionar...',
                                    ]) ;
                                    ?>
                                    <?= $form->field($model, 'RESAUT')->textInput(['maxlength' => true]) ?>
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                    
                                    <?= $form->field($model, 'FECON')->textInput() ?>
                                    <?= $form ->field($model, 'ESTOSI')->dropDownList(
                                    
                                    ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTOSI','tabla'=>'ddpermisos'])->all(),'CODE','DESCRIPCION'),
                                    [
                                        'prompt'=>'Seleccionar...',
                                    ]) ;
                                    ?>
                                    <?= $form->field($model, 'RESOSI')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'FECOSI')->textInput() ?>
                                    <?= $form->field($model, 'OBSERV')->textInput(['maxlength' => true]) ?>

                                    </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />
                                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
                                </div>
                            </fieldset>
                        <?php ActiveForm::end(); ?>
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
































<div class="permisosmod-form">

 
   
   
    
   
    
    <?= $form->field($model, 'GCLOUD')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'id_usuario')->textInput() ?>
    <?= $form->field($model, 'fecha_registro')->textInput() ?>
    <div class="form-group">
       
    </div>
  

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard_js.js"></script>

