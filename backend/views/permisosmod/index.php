<?php

use yii\helpers\Html;
use yii\helpers\Url;
//use yii\grid\GridView;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\select2\Select2; 


/* @var $this yii\web\View */
/* @var $searchModel app\models\PermisosmodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Permisos';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permisosmod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Permisos', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Exportar Excel', [''], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Exportar PDF', [''], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'SEDDSC',
            'NUMPER',
            'ASIGNA',
            'NOMTIT',
            //'NUMRUC',
            //'NOMREL',
            //'TIPDOC',
            //'NRODOC',
            //'DOMIC',
            //'NOMCCN',
            //'CODCAT',
            //'CATPER',
            //'CODACT',
            //'NROPAR',
            //'DOCTIT',
            //'SUPAPR',
            //'SECTOR',
            //'NIVAPR',
            //'NOMDIS',
            //'TDLEG',
            //'DOCLEG',
            //'FECLEG',
            //'FECINI',
            //'EXTEN',
            //'FECTER',
            //'SITUAC',
            //'ESTCON',
            //'RESAUT',
            //'FECON',
            //'ESTOSI',
            //'RESOSI',
            //'FECOSI',
            //'OBSERV',
            //'GCLOUD',
            //'id_usuario',
            //'fecha_registro',
            //'FECONT',
            //'ANOTORG',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


?>


</div>
