<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesManejo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Planes Manejos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="planes-manejo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_th',
            'tipth',
            'contrato',
            'fecsol',
            'fecio',
            'fecita',
            'tdleg',
            'docleg',
            'fecleg',
            'nomdis',
            'docges',
            'tipge',
            'nump',
            'fecini',
            'fecter',
            'supapr',
            'volapr',
            'unimed',
            'finali',
            'id_regente',
            'numrgt',
            'nomrgt',
            'dnirgt',
            'respau',
            'rester',
            'seresu',
            'mmulta',
            'observ',
            'gcloud',
            'id_usuario',
            'fecha_registro',
        ],
        
    ]) ?>

     
        <center><h1>Especie del plan de manejo</h1></center>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Agregar Especie
        </button>

        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Especie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                ...
                <div class="especie-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
            </div>
        </div>
        </div>
                
      

                

        
       
        


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard_js.js"></script>
