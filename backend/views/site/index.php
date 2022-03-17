<?php

use yii\widgets\ActiveForm;
use yii\db\ActiveRecord;
use backend\models\TituloHabilitante;
use backend\models\Autorizacionesmod;
use backend\models\Permisosmod;
use backend\models\Concesionesmod;
use backend\Controlador\Action;
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
                'body' => '<h3>Bienvenidos al Sistema</h3>',
            ]) ?>
            <?= \hail812\adminlte\widgets\Callout::widget([
                'type' => 'danger',
                'head' => 'SIGERFOR',
                'body' => 'Sistema de Gerencia Forestal.'
            ]) ?>
        </div>
    </div>

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

    
    
    <h5 class="mb-2 mt-4">Modulos</h5>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $resultado; ?></h3>

                <p>Titulo Habilitante</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-pie"></i>
              </div>
              <a href="index.php?r=titulo-habilitante%2Findex" class="small-box-footer">
                Ir <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $resultado2; ?><sup style="font-size: 20px"></sup></h3>

                <p>Autorizaciones</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-pie"></i>
              </div>
              <a href="index.php?r=autorizacionesmod%2Findex" class="small-box-footer">
                Ir <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $resultado3; ?></h3>

                <p>Permisos</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-pie"></i>
              </div>
              <a href="index.php?r=permisosmod%2Findex" class="small-box-footer">
                Ir <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $resultado4; ?></h3>

                <p>Concesiones</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="index.php?r=concesiones%2Findex" class="small-box-footer">
                Ir <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

</div>