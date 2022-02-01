<?php

namespace app\controllers;

use app\models\Concesionesmod;
use app\models\TituloHabilitante;
use app\models\ConcesionesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\filters\AccessControl;

/**
 * ConcesionesController implements the CRUD actions for Concesionesmod model.
 */
class ConcesionesController extends Controller
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
                            'actions' => ['logout', 'index'], // add all actions to take guest to login page            
                            'allow' => true,            
                            'roles' => ['@'],            
                        ],            
                    ],
                 /*   'only' => ['logout'],
                    'rules' => [
                        [
                            'actions' => ['logout'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],*/
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
     * Lists all Concesionesmod models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ConcesionesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Concesionesmod model.
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
     * Creates a new Concesionesmod model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Concesionesmod();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {


            // guardamos en la bd la tabla th
                $modelTh = new TituloHabilitante();
                $modelTh->sede = $model->RESREG;
                $modelTh->contrato = $model->CONTRA;
                $modelTh->tipo_contrato = ('Concesion');
                $modelTh->nombre_titular = $model->NOMTIT;
                $modelTh->superficie = $model->SUPAPR;
                $modelTh->situacion = $model->SITUAC;
                $modelTh->estado = $model->ESTCON;
                $modelTh->distrito = $model->NOMDIS;
                /*$modelTh->provincia = $model->NOMDIS;*/
                $modelTh->anhio_otorgado = $model->ANOTORG;
                $modelTh->fecha_contrato = $model->FECONT;

                $modelTh->save();

              /*  'sede' => 'Sede',ESTCON NOMDIS
                'tipo_contrato' => 'Tipo Contrato',
                'contrato' => 'Contrato',
                'nombre_titular' => 'Nombre Titular',
                'superficie' => 'Superficie',
                'situacion' => 'Situacion',
                'estado' => 'Estado',
                'distrito' => 'Distrito',
                'provincia' => 'Provincia',
                'anhio_otorgado' => 'Anhio Otorgado',
                'fecha_contrato' => 'Fecha Contrato',
                'gerforcloud' => 'Gerforcloud',*/



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
     * Updates an existing Concesionesmod model.
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
     * Deletes an existing Concesionesmod model.
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
     * Finds the Concesionesmod model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Concesionesmod the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Concesionesmod::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
