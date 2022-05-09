<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Concesionesmod */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Concesiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="concesionesmod-view">

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
            'RESREG',
            'FECREG',
            'CONTRA',
            'TIPCON',
            'FECONT',
            'ADENDA',
            'NOMTIT',
            'NUMRUC',
            'NOMREL',
            'NOMRELU',
            'NOMRELD',
            'TIPDOC',
            'NRODOC',
            'PROCOT',
            'CONCUR',
            'SUPAPR',
            'SECTOR',
            'NOMDIS',
            'SEDDSC',
            'DOCLEG',
            'FECLEG',
            'ANOTORG',
            'UNIAPR',
            'FECINI',
            'FECTER',
            'CODACT',
            'FINALI',
            'OBJCON',
            'PAGODA',
            'TIPAGO',
            'ESTCON',
            'SITUAC',
            'ESTARE',
            'RESAUT',
            'ESTOSI',
            'RESOSI',
            'FECOSI',
            'RDOCAD',
            'FECCAD',
            'OBSERV',
            'GCLOUD',
            'id_usuario',
            'fecha_registro',
        ],
    ]) ?>

</div>
