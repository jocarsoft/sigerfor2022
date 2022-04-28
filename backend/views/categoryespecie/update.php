<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categoryespecie */

$this->title = 'Actualizar Categoria y especie: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categoryespecies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="categoryespecie-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
