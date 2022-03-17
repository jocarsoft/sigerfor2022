<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Constantesmod;



/* @var $this yii\web\View */
/* @var $model app\models\Autorizacionesmod */
/* @var $form yii\widgets\ActiveForm */
?>

<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="../css/wizard_css.css" />


<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Autorizaciones</strong></h2>
               
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="paso1"><strong>Item 1</strong></li>
                                <li id="paso2"><strong>Item 2</strong></li>
                                <li id="paso3"><strong>Item 3</strong></li>
                                <li id="paso4"><strong>Item 4</strong></li>
                                <li id="paso5"><strong>Item 5</strong></li>
                                <li id="confirm"><strong>Final</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'SEDDSC')->textInput() ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'NUMAUT')->textInput(['maxlength' => true]) ?> 
                                        </div>

                                        <div class="col-md-6">
                                       
                                        <?= $form->field($model, 'FECONT')->input('date') ?>
                                       
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
                                            <?php 
                                                //para crear campo combo
                                                $datos = Constantesmod::find()
                                                ->where(['campo' => 'TIPO ASIGNA','tabla'=>'ddautorizaciones'])
                                                ->all();
                                                $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');
                                                echo $form->field($model, 'ASIGNA')->dropDownList(
                                                $listData,
                                                ['prompt'=>'Seleccionar...']
                                                    );    
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'NOMTIT')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'NOMREL')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'TIPDOC')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'tipo documento','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                                ]) ;
                                            ?>          
                                        </div>
                                    </div>
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Siguiente" />
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
                                            <?= $form->field($model, 'NOMCCN')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'DOCLEG')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">

                                        <?= $form->field($model, 'FECLEG')->input('date') ?>
                                    
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'CODCAT')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => '999999999999',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 12, 'greedy' => false]

                                                ]) 
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'SECTOR')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>                                
                                </div> 
                                <input type="button" name="previous" 
                                class="previous action-button-previous" value="Regresar" /> 
                                <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'NOMDIS')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'NOMDIS','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'DOCTIT')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NROPAR')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => 'A',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 12, 'greedy' => false]

                                                ])
                                                ?>
                                        </div>

                                        <div class="col-md-6">
                                            
                                            <?= $form->field($model, 'SUPAPR')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'name' => 'input-33',
                                                    'clientOptions' => [
                                                        'alias' =>  'decimal',
                                                        'groupSeparator' => ',',
                                                        'autoGroup' => true
                                                    ],

                                                ])
                                        ?>


                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'CODACT')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'CODAC','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                        
                                        <?= $form->field($model, 'FECINI')->input('date') ?>
                                        
                                        </div>
                                    </div>
  
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> 
                                       <input type="button" name="next" class="next action-button" value="Siguiente" />
                            </fieldset>                                           

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                                                                                                               
                                        <?= $form->field($model, 'FECTER')->input('date') ?>
                                           
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NOMRGT')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'NUMRGT')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => '9999999999',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 12, 'greedy' => false]

                                                ])
                                                ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'DNIREG')->widget(\yii\widgets\MaskedInput::class, [
                                                    //'mask' => '99999999',
                                                    'mask' => '9',
                                                    'clientOptions' => ['repeat' => 8, 'greedy' => false]

                                                ])
                                                ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'SITUAC')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'SITUAC','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                             [
                                            'prompt'=>'Seleccionar...',
                                             ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'RESOSI')->textInput(['maxlength' => true]) ?>
                                        </div>


                                    </div> 
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> 
                                <input type="button" name="make_payment" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'ESTMOD')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTMOD','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'FECMOD')->input('date') ?>
                                       
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'ESTCON')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTCON','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'ESTCON')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTCON','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                        <?= $form->field($model, 'FECCON')->input('date') ?>
                                            
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'ESTOSI')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'ESTOSI','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6"> 
                                       
                                        <?= $form->field($model, 'FECOSI')->input('date') ?>
                                       
                                       
                                        </div>
                                    </div>                                                                     
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Regresar" /> 
                                       <input type="button" name="make_payment" class="next action-button" value="Siguiente" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                   <div class="row">
                                       <div class="col-md-6">
                                            <?= $form ->field($model, 'TIPANB')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPANB','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                       </div>

                                       <div class="col-md-6">
                                            <?= $form->field($model, 'SUPRES')->textInput(['maxlength' => true]) ?>
                                       </div>

                                       <div class="col-md-6">
                                            <?= $form->field($model, 'PAGO')->textInput(['maxlength' => true]) ?>
                                       </div>

                                       <div class="col-md-6">
                                            <?= $form->field($model, 'DESTIN')->textInput() ?>
                                       </div>

                                       <div class="col-md-6">
                                       <?= $form ->field($model, 'DESTIN')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DESTIN','tabla'=>'ddautorizaciones'])->all(),'CODE','DESCRIPCION'),
                                            [
                                            'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                       </div>

                                       <div class="col-md-6">
                                            <?= $form->field($model, 'OBSERV')->textInput(['maxlength' => true]) ?>
                                       </div>
                                   </div>  
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="Regresar" />  
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


<!--<div class="autorizacionesmod-form">
    
    <?= $form->field($model, 'GCLOUD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_usuario')->textInput() ?>


    <?= $form->field($model, 'fecha_registro')->textInput() ?>
</div>-->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="../js/wizard_js.js"></script>
