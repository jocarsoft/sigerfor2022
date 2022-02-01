<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EspecieGuia */

$this->title = 'Crear Especie Guia';
$this->params['breadcrumbs'][] = ['label' => 'Especie Guias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-guia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
