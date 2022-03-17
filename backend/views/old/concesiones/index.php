<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConcesionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Concesiones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concesionesmod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Concesiones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'RESREG',
            'FECREG',
            'CONTRA',
            'TIPCON',
            //'FECONT',
            //'ADENDA',
            //'NOMTIT',
            //'NUMRUC',
            //'NOMREL',
            //'TIPDOC',
            //'NRODOC',
            //'PROCOT',
            //'CONCUR',
            //'SUPAPR',
            //'SECTOR',
            //'NOMDIS',
            //'SEDDSC',
            //'DOCLEG',
            //'FECLEG',
            //'ANOTORG',
            //'UNIAPR',
            //'FECINI',
            //'FECTER',
            //'CODACT',
            //'FINALI',
            //'OBJCON',
            //'PAGODA',
            //'TIPAGO',
            //'ESTCON',
            //'SITUAC',
            //'ESTARE',
            //'RESAUT',
            //'ESTOSI',
            //'RESOSI',
            //'FECOSI',
            //'RDOCAD',
            //'FECCAD',
            //'OBSERV',
            //'GCLOUD',
            //'id_usuario',
            //'fecha_registro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
