<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;
use app\models\Regente;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesManejo */
/* @var $form yii\widgets\ActiveForm */
?>

<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />

<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Planes de Manejo</strong></h2>
                <p>Crear un plan de manejo</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="paso1"><strong>Paso 1</strong></li>
                                <li id="paso2"><strong>Paso 2</strong></li>
                                <li id="paso3"><strong>Paso 3</strong></li>
                                <li id="paso3"><strong>Paso 4</strong></li>
                                <li id="paso3"><strong>Paso 5</strong></li>
                                <li id="confirm"><strong>Finalizar</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    
                                    <?= $form->field($model, 'contrato')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'fecsol')->input('date') ?>     
                                    
                                    <?= $form->field($model, 'fecio')->input('date') ?>    
                                    <?= $form->field($model, 'fecita')->input('date') ?> 
                                    
                                                      
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>
                            
                            <fieldset>
                                <div class="form-card">

                                
                                    <?= $form ->field($model, 'tdleg')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TDLEG','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'docleg')->textInput(['maxlength' => true]) ?>  
                                    
                                    
                                    <?= $form->field($model, 'fecleg')->input('date') ?> 
                                    
                                    <?= $form ->field($model, 'nomdis')->textInput(['maxlength' => true]) ?>
                                    
                                                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form ->field($model, 'docges')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DOCGES','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'tipge')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDGE','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form->field($model, 'nump')->textInput() ?>

                                    <?= $form->field($model, 'fecini')->input('date') ?> 
                                    
                                    <?= $form->field($model, 'fecter')->input('date') ?> 
                                   
                                    
                                                                        
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <?= $form->field($model, 'supapr')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'volapr')->textInput(['maxlength' => true]) ?>
                                    <?= $form ->field($model, 'unimed')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'UNIMED','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                    <?= $form ->field($model, 'finali')->dropDownList(
                                        
                                        ArrayHelper::map(Constantesmod::find()->where(['campo'=>'FINALI','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                        [
                                            'prompt'=>'Seleccionar...',
                                        ]) ;
                                    ?>
                                                                 
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    
                                    <?= $form ->field($model, 'id_regente')->dropDownList(
                                            ArrayHelper::map(Regente::find()->all(),'id','nomrgt'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                    <?= $form->field($model, 'numrgt')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'nomrgt')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'dnirgt')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'respau')->textInput(['maxlength' => true]) ?>
                                       
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Anterior" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                <?= $form->field($model, 'rester')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'seresu')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'mmulta')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'observ')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'gcloud')->textInput() ?> 
                                </div>
                                <div class="form-group">
                                <input type="button" name="previous" class="previous action-button-previous" value="Regresar"  />  
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
    

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard_js.js"></script>




