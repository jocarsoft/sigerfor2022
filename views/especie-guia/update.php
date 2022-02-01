<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EspecieGuia */

$this->title = 'Actualizar Especie Guia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Especie Guias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="especie-guia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
