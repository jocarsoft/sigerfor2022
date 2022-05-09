<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Constantesmod;
use backend\models\UbigeoPeruDepartments;
use backend\models\UbigeoPeruProvinces;
use backend\models\UbigeoPeruDistricts;


/* @var $this yii\web\View */
/* @var $model app\models\Concesionesmod */
/* @var $form yii\widgets\ActiveForm */
?>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="../css/wizard_css.css" />

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
                                <liv class="active" id="paso1"><strong>Item 1</strong></liv>
                                <liv id="paso2"><strong>Item 2</strong></liv>
                                <liv id="paso3"><strong>Item 3</strong></liv>
                                <liv id="confirm"><strong>Finalizar</strong></liv>
                            </ul> <!-- fieldsets -->

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'CONTRA')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
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
                                        </div>

                                        <div class="col-md-6">
                                            <?php 
                                            //para crear campo combo
                                            echo $form ->field($model,'departamento_co')->dropDownList(
                                                ArrayHelper::map(UbigeoPeruDepartments::find()->all(), 'id','name'),
                                                ['prompt'=>'Seleccionar...',
                                                'onchange'=>'
                                                    $.post("distrito?id='.'"+$(this).val(),function(data){ console.log(data); $("select#concesiones-provincia_co").html(data);});'
                                                    ]) ;
                                            
                                               
                                            ?>
                                        </div>

                                        
                                       
                                        <div class="col-md-6">
                                            <?php 
                                            //para crear campo combo
                                            echo $form ->field($model,'provincia_co')->dropDownList(
                                                ArrayHelper::map(UbigeoPeruProvinces::find()->all(), 'id','name'),
                                                ['prompt'=>'Seleccionar...']
                                            );
                                               
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?php 
                                            //para crear campo combo
                                            echo $form ->field($model,'distrito_co')->dropDownList(
                                                ArrayHelper::map(UbigeoPeruDistricts::find()->all(), 'id','name'),
                                                ['prompt'=>'Seleccionar...']
                                            );
                                               
                                            ?>
                                        </div>



                                        <div class="col-md-6">
                                        <?= $form->field($model, 'FECONT')->input('date') ?>                                        
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'ADENDA')->dropDownList(
                                            
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ADENDA','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NOMTIT')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">                                            
                                            <?= $form->field($model, 'NUMRUC')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => '9999999999',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 11, 'greedy' => false]
                                                ])
                                                ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NOMREL')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NOMRELU')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NOMRELD')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'TIPDOC')->dropDownList( 
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDOC','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                    </div>
                                </div> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                                          
                                        <div class="col-md-6">
                                            
                                            <?= $form->field($model, 'NRODOC')->widget(\yii\widgets\MaskedInput::class, [
                                               // 'mask' => '999999999999',
                                                'mask' => '9',
                                                    'clientOptions' => ['repeat' => 12, 'greedy' => false]

                                            ]) 
                                            ?>

                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'PROCOT')->dropDownList(  
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'PROCOT','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'CONCUR')->dropDownList( 
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CONCUR','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'ANOTORG')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => '9999',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 4, 'greedy' => false]

                                                ]) 
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'UNIAPR')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'FECINI')->input('date') ?>
                                    
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'FECTER')->input('date') ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'CODACT')->dropDownList(    
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CODACT','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'FINALI')->dropDownList(    
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'FINALI','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'OBJCON')->dropDownList(  
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'OBJCON','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                                <?= $form ->field($model, 'ESTCON')->dropDownList( 
                                                    ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTCON','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                                    [
                                                        'prompt'=>'Seleccionar...',
                                                    ]) ;
                                                ?>
                                            </div>

                                            <div class="col-md-6">
                                                <?= $form ->field($model, 'SITUAC')->dropDownList(
                                                ArrayHelper::map(Constantesmod::find()->where(['campo'=>'SITUAC','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                                [
                                                    'prompt'=>'Seleccionar...',
                                                ]) ;
                                                ?>
                                            </div>

                                            <div class="col-md-6">
                                                <?= $form ->field($model, 'ESTARE')->dropDownList(
                                                ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTARE','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                                [
                                                    'prompt'=>'Seleccionar...',
                                                ]) ;
                                            ?>
                                            </div>

                                            <div class="col-md-6">
                                                <?= $form->field($model, 'RESAUT')->textInput(['maxlength' => true]) ?>
                                            </div>

                                            <div class="col-md-6">
                                            <?= $form ->field($model, 'ESTOSI')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTOSI','tabla'=>'ddconcesiones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'RESOSI')->textInput(['maxlength' => true]) ?>
                                        </div>


                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>
                            
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                        
                                        <?= $form->field($model, 'FECOSI')->input('date') ?>
                                       
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'RDOCAD')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">

                                        <?= $form->field($model, 'FECCAD')->input('date') ?>
                                        
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'OBSERV')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>
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
<script src="../js/wizard_js.js"></script>






 



