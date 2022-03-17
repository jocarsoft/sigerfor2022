<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Guía', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'id_plan',
            'clase_guia',
            'numgtf',
            'fecexp',
            //'fecter',
            //'modth',
            //'codtih',
            //'docleg',
            //'docges',
            //'numpo',
            //'numpar',
            //'depro',
            //'seddsc',
            //'prvpro',
            //'dispro',
            //'gtfori',
            //'depdes',
            //'prodes',
            //'disdes',
            //'tipper',
            //'tipdoc',
            //'numdoc',
            //'aperaz',
            //'apemat',
            //'nombre',
            //'tipgtf',
            //'medio',
            //'plaveh',
            //'plarem',
            //'nomcon',
            //'numlic',
            //'facpag',
            //'observ',
            //'gcloud',
            //'id_usuario',
            //'fecha_registro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
