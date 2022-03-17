<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bitacora */

$this->title = $model->id_bit;
$this->params['breadcrumbs'][] = ['label' => 'Bitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bitacora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_bit' => $model->id_bit], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_bit' => $model->id_bit], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_bit',
            'accion',
            'cond_dato',
            'id_registro',
            'tabla',
            'usuario',
            'fecha_hora',
        ],
    ]) ?>

</div>
