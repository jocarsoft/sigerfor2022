<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Autorizacionesmod */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Autorizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="autorizacionesmod-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás segura de que quieres eliminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'SEDDSC',
            'NUMAUT',
            'ASIGNA',
            'NOMTIT',
            'NOMREL',
            'TIPDOC',
            'NRODOC',
            'NOMCCN',
            'DOCLEG',
            'FECLEG',
            'CODCAT',
            'SECTOR',
            'NOMDIS',
            'DOCTIT',
            'NROPAR',
            'SUPAPR',
            'CODACT',
            'FECINI',
            'FECTER',
            'NOMRGT',
            'NUMRGT',
            'DNIREG',
            'SITUAC',
            'RESOSI',
            'ESTMOD',
            'FECMOD',
            'ESTCON',
            'FECCON',
            'ESTOSI',
            'FECOSI',
            'TIPANB',
            'SUPRES',
            'PAGO',
            'DESTIN',
            'OBSERV',
            'GCLOUD',
            'id_usuario',
            'fecha_registro',
            'FECONT',
            'ANOTORG',
        ],
    ]) ?>

</div>
