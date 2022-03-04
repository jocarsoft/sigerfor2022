<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\Control;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;
use app\models\Especie;

/* @var $this yii\web\View */
/* @var $model app\models\EspeciePlan */
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
                <h2><strong>Especie Plan</strong></h2>
                <!--<p>Creacion de una autorización</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $form->field($model, 'id_plan')->textInput() ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'id_especie')->dropDownList(
                                                    ArrayHelper::map(Especie::find()->all(),'id','nombre_cientifico'),
                                                    ['prompt' => 'Seleccionar']
                                                    ) 
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'resapr')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form ->field($model, 'docges')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'DOCGES','tabla'=>'ddguia'])->all(),'CODE','DESCRIPCION'),
                                            [
                                                'prompt'=>'Seleccionar...',
                                            ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            
                                            <?= $form ->field($model, 'tipdge')->dropDownList(
                                            ArrayHelper::map(Constantesmod::find()->where(['campo'=>'TIPDGE','tabla'=>'ddplanes'])->all(),'CODE','DESCRIPCION'),
                                                [
                                                    'prompt'=>'Seleccionar...',
                                                ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'numpo')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'parco')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?php 
                                            //para crear campo combo
                                            $datos = Constantesmod::find()
                                            ->where(['campo' => 'PRODUC','tabla'=>'ddespecieplan'])
                                            ->all();
                                            $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');
                                            echo $form->field($model, 'produc')->dropDownList(
                                                $listData,
                                            ['prompt'=>'Seleccionar...']
                                                );    
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'nomcom')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'nomcie')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'canesp')->textInput() ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'volapr')->textInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'unimed')->dropDownList( 
                                                ArrayHelper::map(Constantesmod::find()->where(['campo'=>'UNIMED', 'tabla'=>'ddespecieplan'])->all(),'CODE','DESCRIPCION'),
                                                [
                                                    'prompt'=>'Seleccionar...',
                                                ]) ;
                                            ?>
                                        </div>

                                        <div class="col-md-6">
                                            <?= $form->field($model, 'observ')->textInput(['maxlength' => true]) ?>
                                        </div>
                                    </div>      
                                </div>   
                                <div class="form-group">
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




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard_js.js"></script>