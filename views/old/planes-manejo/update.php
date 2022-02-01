<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesManejo */

$this->title = 'Update Planes Manejo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Planes Manejos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planes-manejo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
