<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\TituloHabilitante;
/* @var $this yii\web\View */
/* @var $model app\models\TituloHabilitante */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Titulo Habilitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="titulo-habilitante-view">

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
            'sede',
            'tipo_contrato',
            'contrato',
            'nombre_titular',
            'superficie',
            'situacion',
            'estado',
            'distrito',
            'provincia',
            'anhio_otorgado',
            'fecha_contrato',
            'gerforcloud',
        ],
    ]) ?>

</div>
