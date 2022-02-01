<?php

namespace app\controllers;

use app\models\PlanesManejo;
use app\models\TituloHabilitante;
use app\models\Regente;
use app\models\Buscador;
use app\models\PlanesManejoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * PlanesManejoController implements the CRUD actions for PlanesManejo model.
 */
class PlanesManejoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
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
     * Lists all PlanesManejo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PlanesManejoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionVista()
    {
        $buscador = new Buscador();

        if ($this->request->isPost) {

            $buscador->load($this->request->post());

            //buscamos el TH con el campo buscar del modelo buscador
            $SQL_buscadorTH = TituloHabilitante::find()->where(['contrato' => $buscador->buscar])->one();// TituloHabilitante::find()
            //->where(['contrato' => $buscador->buscar])->one();
               
            if($SQL_buscadorTH != null){
                $model = new PlanesManejo();


                $model->id_th = $SQL_buscadorTH->id;
                $model->tipth= $SQL_buscadorTH->tipo_contrato;
                $model->contrato = $SQL_buscadorTH->contrato;
                $model->nomdis = $SQL_buscadorTH->distrito;
                
               
                return $this->render('create', [
                    'model' => $model,            
                ]);
            }else{
                return $this->render('vista', [
                    'model' => $buscador,            
                ]);
            }
           
            //los valores del TH lo agregamos al modelo de plan de manejo
           
            //enviamos el modelo de plan de manejo a la vista create
           // if ($model->load($this->request->post()) && $model->save()) {
            //return $this->redirect('index.php?r=planes-manejo/create');
           // }
        } else{
            return $this->render('vista', [
                'model' => $buscador,            
            ]);
        }
      

       
    }


    /**
     * Displays a single PlanesManejo model.
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
     * Creates a new PlanesManejo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PlanesManejo();

    //    if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
         else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PlanesManejo model.
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
     * Deletes an existing PlanesManejo model.
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
     * Finds the PlanesManejo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return PlanesManejo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PlanesManejo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
