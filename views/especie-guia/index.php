<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspecieGuiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especie Guias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-guia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Especie Guia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_guia',
            'id_especie_plan',
            'produc',
            'canpie',
            //'nomcom',
            //'nomcie',
            //'voltot',
            //'unimed',
            //'observ',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
