<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Permisosmod */

$this->title = 'Crear Permisos';
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permisosmod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
