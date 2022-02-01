<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Constantesmod;

/* @var $this yii\web\View */
/* @var $model app\models\EspecieGuia */
/* @var $form yii\widgets\ActiveForm */
?>

<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />

<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Especie Guia</strong></h2>
                <!--<p>Fill all form field to go to next step</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                             <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">

                                    <?= $form->field($model, 'id_guia')->textInput() ?>
                                    <?= $form->field($model, 'id_especie_plan')->textInput() ?>
                                    <?= $form->field($model, 'produc')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'canpie')->textInput() ?>
                                    <?= $form->field($model, 'nomcom')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'nomcie')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'voltot')->textInput(['maxlength' => true]) ?>  
                                    <?php 
                                    //para crear campo combo
                                    $datos = Constantesmod::find()
                                    ->where(['campo' => 'UNIMED','tabla'=>'ddespecieguia'])
                                    ->all();
                                    $listData=ArrayHelper::map($datos,'CODE','DESCRIPCION');

                                    echo $form->field($model, 'unimed')->dropDownList(
                                        $listData,
                                    ['prompt'=>'Seleccionar...']
                                        );    
                                    ?>
                                    <?= $form->field($model, 'observ')->textInput(['maxlength' => true]) ?>
                                </div>
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
