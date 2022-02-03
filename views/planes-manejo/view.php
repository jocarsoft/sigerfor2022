<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;

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
        <?= Html::a('Agregar Especie', ['create', 'especie-plan' => $model->id], ['class' => 'btn btn-primary']) ?>

        
      

                

        
       
        


</div>
