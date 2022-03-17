<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Constantesmod */

$this->title = 'Create Constantesmod';
$this->params['breadcrumbs'][] = ['label' => 'Constantesmods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constantesmod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
