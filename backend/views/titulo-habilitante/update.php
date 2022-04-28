<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TituloHabilitante */

$this->title = 'Actualizar Titulo Habilitante: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Titulo Habilitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="titulo-habilitante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
