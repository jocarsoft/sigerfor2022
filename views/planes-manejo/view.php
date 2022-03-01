<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;
use app\controller\PlanesManejoController;

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

        <p >    
            <center><h1>Especie del plan de manejo</h1></center>
        </p>

        <p  align="center" >
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPM">
            Agregar Especie
            </button>
        </p>

        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_plan',
            //'id_especie',
            'resapr',
            'docges',
            //'tipdge',
            //'numpo',
            //'parco',
            //'produc',
            //'nomcom',
            //'nomcie',
            //'canesp',
            //'volapr',
            //'unimed',
            //'observ',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


            <!-- Modal -->
        <div class="modal fade" id="ModalPM" tabindex="-1" aria-labelledby="ModalPM" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalPM">Especie Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            
                <div class="especie-plan-create">

                    <h1><?= Html::encode($this->title) ?></h1>

                    <?= $this->render('_formep', [
                        'model' => $modeloEPcontrolador ,
                    ]) ?>

                </div>

            </div>
        </div>
        </div>
    
    
                
</div>


