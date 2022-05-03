<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Permisosmod */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permisosmod-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '
                ¿Estás seguro de que quieres eliminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'SEDDSC',
            'NUMPER',
            'ASIGNA',
            'NOMTIT',
            'NUMRUC',
            'NOMREL',
            'TIPDOC',
            'NRODOC',
            'DOMIC',
            'NOMCCN',
            'CODCAT',
            'CATPER',
            'CODACT',
            'NROPAR',
            'DOCTIT',
            'SUPAPR',
            'SECTOR',
            'NIVAPR',
            'NOMDIS',
            'TDLEG',
            'DOCLEG',
            'FECLEG',
            'FECINI',
            'EXTEN',
            'FECTER',
            'SITUAC',
            'ESTCON',
            'RESAUT',
            'FECON',
            'ESTOSI',
            'RESOSI',
            'FECOSI',
            'OBSERV',
            'GCLOUD',
            'id_usuario',
            'fecha_registro',
            'FECONT',
            'ANOTORG',
        ],
    ]) ?>

</div>
