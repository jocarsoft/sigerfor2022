<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;



/* @var $this yii\web\View */
/* @var $searchModel app\models\AutorizacionesmodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Autorizaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorizacionesmod-index">
    <p>
        <?= Html::a('Crear Autorizaciones', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Excel', ['export-excel2'], ['class'=>'btn btn-info']); ?>
        
        
    </p>


    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'SEDDSC',
            'NUMAUT',
            'ASIGNA',
            'NOMTIT',
            //'NOMREL',
            //'TIPDOC',
            //'NRODOC',
            //'NOMCCN',
            //'DOCLEG',
            //'FECLEG',
            //'CODCAT',
            //'SECTOR',
            //'NOMDIS',
            //'DOCTIT',
            //'NROPAR',
            //'SUPAPR',
            //'CODACT',
            //'FECINI',
            //'FECTER',
            //'NOMRGT',
            //'NUMRGT',
            //'DNIREG',
            //'SITUAC',
            //'RESOSI',
            //'ESTMOD',
            //'FECMOD',
            //'ESTCON',
            //'FECCON',
            //'ESTOSI',
            //'FECOSI',
            //'TIPANB',
            //'SUPRES',
            //'PAGO',
            //'DESTIN',
            //'OBSERV',
            //'GCLOUD',
            //'id_usuario',
            //'fecha_registro',
            //'FECONT',
            //'ANOTORG',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
