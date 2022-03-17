<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PermisosmodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permisoos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permisosmod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Permisos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
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


</div>
