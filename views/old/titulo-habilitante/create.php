<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TituloHabilitante */

$this->title = 'Crear Titulo Habilitante';
$this->params['breadcrumbs'][] = ['label' => 'Titulo Habilitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulo-habilitante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
