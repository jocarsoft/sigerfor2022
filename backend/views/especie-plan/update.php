<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EspeciePlan */

$this->title = 'Actualizar Especie Plan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Especie Planes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="especie-plan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
