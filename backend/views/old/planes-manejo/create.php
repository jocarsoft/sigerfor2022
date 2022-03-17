<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanesManejo */

$this->title = 'Crear Planes Manejo';
$this->params['breadcrumbs'][] = ['label' => 'Planes Manejos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-manejo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
