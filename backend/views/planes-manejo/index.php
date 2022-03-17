<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanesManejoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planes Manejos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-manejo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Planes Manejo', ['vista'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_th',
            'tipth',
            'contrato',
            'fecsol',
            //'fecio',
            //'fecita',
            //'tdleg',
            //'docleg',
            //'fecleg',
            //'nomdis',
            //'docges',
            //'tipge',
            //'nump',
            //'fecini',
            //'fecter',
            //'supapr',
            //'volapr',
            //'unimed',
            //'finali',
            //'id_regente',
            //'numrgt',
            //'nomrgt',
            //'dnirgt',
            //'respau',
            //'rester',
            //'seresu',
            //'mmulta',
            //'observ',
            //'gcloud',
            //'id_usuario',
            //'fecha_registro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
