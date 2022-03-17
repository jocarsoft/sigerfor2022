<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Permisosmod */

$this->title = 'Update Permisosmod: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Permisosmods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="permisosmod-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
