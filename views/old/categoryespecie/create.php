<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categoryespecie */

$this->title = 'Crear Categoria y especie';
$this->params['breadcrumbs'][] = ['label' => 'Categoria y especies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoryespecie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
