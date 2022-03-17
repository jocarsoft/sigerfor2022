<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categoryespecie */
/* @var $form yii\widgets\ActiveForm */
?>
<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
<link  rel="stylesheet" href="css/wizard_css.css" />


<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-11 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Categoria y Especie</strong></h2>
                <!--<p>Fill all form field to go to next step</p>-->
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <!--<form id="msform">-->
                        <?php $form = ActiveForm::begin(); ?>
                           
                            <!-- fieldsets -->
                            
                            <fieldset>
                                <div class="form-card">

                                    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'denominacion')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>
                                                                
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



