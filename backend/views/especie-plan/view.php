<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EspeciePlan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Especie Planes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="especie-plan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este artículo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_plan',
            'id_especie',
            'resapr',
            'docges',
            'tipdge',
            'numpo',
            'parco',
            'produc',
            'nomcom',
            'nomcie',
            'canesp',
            'volapr',
            'unimed',
            'observ',
        ],
    ]) ?>

</div>
