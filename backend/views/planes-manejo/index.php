<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanesManejoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planes Manejos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planes-manejo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Planes Manejo', ['vista'], ['class' => 'btn btn-success']) ?>
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
      'attribute' => 'id_th', 
      'vAlign' => 'middle',
      'hAlign' => 'center'
  ],
  [
      'attribute' => 'tipth', 
      'vAlign' => 'middle',
      'hAlign' => 'center'    
  ],
  [
    'attribute' => 'contrato', 
    'vAlign' => 'middle',
    'hAlign' => 'center'    
],
[
    'attribute' => 'fecsol', 
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
            'heading'=>Yii::t('app', 'PLANES DE MANEJO'),
            'type'=>'info',
            //'before'=>Html::a(Yii::t('app', 'Create User'), ['create'], ['data-pjax' => 0, 'class' => 'btn btn-danger']),
            'after'=>Html::a('<i class="fas fa-redo"></i> Actualizar', ['index'], ['class' => 'btn btn-info']),
            'footer'=>false
        ],
        ]);

?>
  



</div>
