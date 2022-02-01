<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;

/* @var $this yii\web\View */
/* @var $model app\models\Concesionesmod */
/* @var $form yii\widgets\ActiveForm */
?>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />

<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Concesiones</strong></h2>
               <!-- <p>Fill all form field to go to next step</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>    
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="paso1"><strong>Account</strong></li>
                                <li id="paso2"><strong>Personal</strong></li>
                                <li id="paso3"><strong>Payment</strong></li>
                                <li id="paso4"><strong>Payment</strong></li>
                                <li id="paso5"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->

                            <fieldset>
                                <div class="form-card">
                                <?= $form->field($model, 'CONTRA')->textInput(['maxlength' => true]) ?>
                                    <?php 
                                    //para crear campo combo
                                    $datos = Constantesmod::find()
                                    ->where(['campo' => 'TIPCON','tabla' => 'ddconcesiones'])
                                    ->all();
                                    $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');

                                    echo $form->field($model, 'TIPCON')->dropDownList(
                                        $listData,
                                    ['prompt'=>'Seleccionar...']
                                        );    
                                    ?>
                                    <?= $form->field($model, 'FECONT')->textInput() ?>
                                    <?= $form ->field($model, 'ADENDA')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ADENDA','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'NOMTIT')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'NUMRUC')->textInput(['maxlength' => true]) ?>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'NOMREL')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'TIPDOC')->dropDownList( 
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDOC','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'NRODOC')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'PROCOT')->dropDownList(  
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'PROCOT','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'CONCUR')->dropDownList( 
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CONCUR','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'ANOTORG')->textInput() ?>
                                    <?= $form->field($model, 'UNIAPR')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'FECINI')->textInput() ?>
                                    <?= $form->field($model, 'FECTER')->textInput() ?>
                                    <?= $form ->field($model, 'CODACT')->dropDownList(    
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CODACT','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'FINALI')->dropDownList(    
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'FINALI','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form ->field($model, 'OBJCON')->dropDownList(  
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'OBJCON','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'PAGODA')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'TIPAGO')->dropDownList(  
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPAGO','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'ESTCON')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTCON','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'SITUAC')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'SITUAC','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                
                                    <?= $form ->field($model, 'ESTARE')->dropDownList(
        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTARE','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'RESAUT')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'ESTOSI')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTOSI','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'RESOSI')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'FECOSI')->textInput() ?>
                                   
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                <?= $form->field($model, 'RDOCAD')->textInput(['maxlength' => true]) ?>
                                <?= $form->field($model, 'FECCAD')->textInput() ?>
                                <?= $form->field($model, 'OBSERV')->textInput(['maxlength' => true]) ?>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> 
                                <?= Html::submitButton('GUARDAR', ['class' => 'btn btn-success']) ?>
    
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






 



