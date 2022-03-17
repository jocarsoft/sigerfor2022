<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Concesionesmod */

$this->title = 'Crear Conseciones';
$this->params['breadcrumbs'][] = ['label' => 'Concesionesmods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="concesionesmod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>