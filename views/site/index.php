<?php

use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;
use app\models\TituloHabilitante;
use app\models\Autorizacionesmod;
use app\models\Permisosmod;
use app\models\Concesionesmod;
use app\Controlador\Action;
use yii\db\Query;
use yii\db\Command;
use yii\db\QueryBuilder;

$this->title = 'Inicio';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?= \hail812\adminlte\widgets\Alert::widget([
                'type' => 'success',
                'body' => '<h3>Congratulations!</h3>',
            ]) ?>
            <?= \hail812\adminlte\widgets\Callout::widget([
                'type' => 'danger',
                'head' => 'I am a danger callout!',
                'body' => 'There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.'
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
        
         
        
        <?php

        $resultado= TituloHabilitante::find()->count();

        ?>

        <?php

        $resultado2= Autorizacionesmod::find()->count();

        ?>

        <?php

        $resultado3= Permisosmod::find()->count();

        ?>

        <?php

        $resultado4= Concesionesmod::find()->count();

        ?>


        <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?r=titulo-habilitante%2Findex" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
        </div>



        <?=\hail812\adminlte\widgets\InfoBox::widget([     
                    
               'text' => 'Titulo Habilitante',
               'number' => $resultado,
                'icon' => 'far fa-copy',
                //'link'=>Url::to("titulo-habilitante/index"),
               // 'link' => ['titulo-habilitante/index'],
                //'theme' => 'gradient-success',
            ]) ?>

        </div>

        

        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Autorizaciones',
                'number' => $resultado2,
                'icon' => 'far fa-copy',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Permisos',
                'number' => $resultado3,
                'icon' => 'far fa-copy',
            ]) ?>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Concesiones',
                'number' => $resultado4,
                'icon' => 'far fa-copy',
            ]) ?>
        </div>
    </div>
</div>