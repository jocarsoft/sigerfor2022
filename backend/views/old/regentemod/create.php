<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Regente */

$this->title = 'Crear Regente';
$this->params['breadcrumbs'][] = ['label' => 'Regentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
