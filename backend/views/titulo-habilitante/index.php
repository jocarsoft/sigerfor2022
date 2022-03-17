<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TituloHabilitanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Titulo Habilitante';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulo-habilitante-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Titulo Habilitante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sede',
            'tipo_contrato',
            'contrato',
            'nombre_titular',
            //'superficie',
            //'situacion',
            //'estado',
            //'distrito',
            //'provincia',
            //'anhio_otorgado',
            //'fecha_contrato',
            //'gerforcloud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
