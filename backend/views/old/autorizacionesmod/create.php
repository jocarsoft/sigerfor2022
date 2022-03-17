<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Autorizacionesmod */

$this->title = 'Crear Autorizaciones';
$this->params['breadcrumbs'][] = ['label' => 'Autorizaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="autorizacionesmod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
