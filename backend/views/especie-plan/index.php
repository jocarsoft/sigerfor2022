<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EspeciePlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especie Plan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="especie-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Especie Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    

    <?php
 

$gridColumns = [
  [
      'class'=>'kartik\grid\SerialColumn',
      'contentOptions'=>['class'=>'kartik-sheet-style'],
      'width'=>'36px',
      'header'=>'',
      'headerOptions'=>['class'=>'kartik-sheet-style']  
  ],
  [
      'attribute' => 'id_plan', 
      'vAlign' => 'middle',
      'hAlign' => 'center'
  ],
  [
      'attribute' => 'id_especie', 
      'vAlign' => 'middle',
      'hAlign' => 'center'    
  ],
  [
    'attribute' => 'resapr', 
    'vAlign' => 'middle',
    'hAlign' => 'center'    
],
[
    'attribute' => 'docges', 
    'vAlign' => 'middle',
    'hAlign' => 'center'    
],
  [
      'class' => 'kartik\grid\ActionColumn',   
  ],
];


?>




<?= GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'pjax'=>true,
        'responsive'=>true,
        'hover'=>true,
        'toolbar'=>[
            '{export}',
            '{toggleData}'
        ],
        'panel' => [
            'heading'=>Yii::t('app', 'ESPECIES PLAN'),
            'type'=>'info',
            //'before'=>Html::a(Yii::t('app', 'Create User'), ['create'], ['data-pjax' => 0, 'class' => 'btn btn-danger']),
            'after'=>Html::a('<i class="fas fa-redo"></i> Actualizar', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ],
        ]);

?>

</div>
