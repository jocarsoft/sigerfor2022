<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guia */

$this->title = 'Crear Guía';
$this->params['breadcrumbs'][] = ['label' => 'Guias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
