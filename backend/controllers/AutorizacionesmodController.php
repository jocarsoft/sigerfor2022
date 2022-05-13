<?php

namespace backend\controllers;

use backend\models\Autorizacionesmod;
use backend\models\TituloHabilitante;
use backend\models\AutorizacionesmodSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Constantesmod;
use backend\models\UbigeoPeruProvinces;
use backend\models\UbigeoPeruDistricts;
use backend\models\UbigeoPeruDepartments;



use yii\filters\AccessControl;

/**
 * AutorizacionesmodController implements the CRUD actions for Autorizacionesmod model.
 */
class AutorizacionesmodController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [            
                            'actions' => ['login', 'error'],            
                            'allow' => true,            
                        ],            
                        [            
                            'actions' => ['logout', 'index', 'view', 'create', 'update','distrito','provincia','delete'], // add all actions to take guest to login page            
                            'allow' => true,            
                            'roles' => ['@'],            
                        ],            
                    ],
               
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Autorizacionesmod models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AutorizacionesmodSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Autorizacionesmod model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Autorizacionesmod model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Autorizacionesmod();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {

                // guardamos en la bd la tabla th
                $modelTh = new TituloHabilitante();
                $modelTh->sede = $model->SEDDSC;
                $modelTh->contrato = $model->NUMAUT;

                $datosp = Constantesmod::find()
                ->where(['campo' => 'TIPO ASIGNA','tabla'=>'ddautorizaciones','CODE'=>$model->ASIGNA])
                ->one();
                $modelTh->tipo_contrato = 'Autorizacion - ' .$datosp->DESCRIPCION;
                $modelTh->nombre_titular = $model->NOMTIT;
                $modelTh->superficie = $model->SUPAPR;
                $modelTh->situacion = $model->SITUAC;
                $modelTh->estado = $model->ESTCON;
                $modelTh->distrito = $model->NOMDIS;
                /*$modelTh->provincia = $model->NOMDIS;*/
                $modelTh->anhio_otorgado = $model->ANOTORG;
                $modelTh->fecha_contrato = $model->FECONT;

                $modelTh->save();







                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionProvincia($id)
    {
        $contador = UbigeoPeruProvinces::find()
        ->andFilterWhere(['like', 'department_id',$id])
        ->count();
        
        $query = UbigeoPeruProvinces::find()->andFilterWhere(['like', 'department_id',$id])->all();
                
       // $contardistrito = Constantesmod::find()
          //  ->like(['code'=>$id])
         //   ->count();

          /*  $distrito = Constantesmod::find()
            ->where(['code_'=>$id])
            ->all();*/

            if($contador>0){

              $i= 0;      

            foreach($query as $query2){

              echo "<option value='".$query2->id."'>".$query2->name."</option>";
                    }
            }
             else {
            echo "<option>-</option>";
            
                }
    }


    public function actionDistrito($id)
    {
        $contador = UbigeoPeruDistricts::find()
        ->andFilterWhere(['like', 'province_id',$id])
        ->count();
        
        $query = UbigeoPeruDistricts::find()->andFilterWhere(['like', 'province_id',$id])->all();
                
       // $contardistrito = Constantesmod::find()
          //  ->like(['code'=>$id])
         //   ->count();

          /*  $distrito = Constantesmod::find()
            ->where(['code_'=>$id])
            ->all();*/

            if($contador>0){

              $i= 0;      

            foreach($query as $query2){

              echo "<option value='".$query2->id."'>".$query2->name."</option>";
                    }
            }
             else {
            echo "<option>-</option>";
            
                }
    }




    /**
     * Updates an existing Autorizacionesmod model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Autorizacionesmod model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Autorizacionesmod model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Autorizacionesmod the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Autorizacionesmod::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
