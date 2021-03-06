<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bitacoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bitacora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bit',
            'accion',
            'cond_dato',
            'id_registro',
            'tabla',
            //'usuario',
            //'fecha_hora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
