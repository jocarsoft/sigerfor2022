<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspeciePlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especie Plan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Especie Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_plan',
            'id_especie',
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


</div>
