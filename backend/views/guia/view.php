<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\controller\GuiaController;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\Guia */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este artículo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_plan',
            'clase_guia',
            'numgtf',
            'fecexp',
            'fecter',
            'modth',
            'codtih',
            'docleg',
            'docges',
            'numpo',
            'numpar',
            'depro',
            'seddsc',
            'prvpro',
            'dispro',
            'gtfori',
            'depdes',
            'prodes',
            'disdes',
            'tipper',
            'tipdoc',
            'numdoc',
            'aperaz',
            'apemat',
            'nombre',
            'tipgtf',
            'medio',
            'plaveh',
            'plarem',
            'nomcon',
            'numlic',
            'facpag',
            'observ',
            'gcloud',
            'id_usuario',
            'fecha_registro',
        ],
    ]) ?>

    <p >    
        <center><h1>Especie Guia</h1></center>
    </p>

    <p  align="center" >
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalG">
        Agregar Especie Guia
        </button>
    </p>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'id_guia',
        'id_especie_plan',
        //'resapr',
       // 'docges',
        //'tipdge',
        //'numpo',
        //'parco',
        'produc',
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
    <div class="modal fade" id="ModalG" tabindex="-1" aria-labelledby="ModalG" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg ">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalG">Especie Guia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
        
            <div class="especie-guia-create">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_formguia', [
                    'model' => $modeloGcontrolador ,
                ]) ?>

            </div>

        </div>
    </div>
    

</div>
