<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guia */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guia-view">

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
            'clase_guia',
            'numgtf',
            'fecexp',
            'fecter',
            'modth',
            'codtih',
            'docleg',
            'docges',
            'numpo',
            'numpar',
            'depro',
            'seddsc',
            'prvpro',
            'dispro',
            'gtfori',
            'depdes',
            'prodes',
            'disdes',
            'tipper',
            'tipdoc',
            'numdoc',
            'aperaz',
            'apemat',
            'nombre',
            'tipgtf',
            'medio',
            'plaveh',
            'plarem',
            'nomcon',
            'numlic',
            'facpag',
            'observ',
            'gcloud',
            'id_usuario',
            'fecha_registro',
        ],
    ]) ?>

</div>
