<?php

namespace app\controllers;

use app\models\Autorizacionesmod;
use app\models\TituloHabilitante;
use app\models\AutorizacionesmodSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
                $modelTh->tipo_contrato = ('Autorizacion');
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
