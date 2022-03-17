<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Categoryespecie;

/* @var $this yii\web\View */
/* @var $model app\models\Categoryespecie */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Categoria y especies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="categoryespecie-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    <?php 
            echo CategoryEspecie::find()->count();
    ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'denominacion',
            'valor',
        ],
    ]) ?>

</div>
