<?php

namespace app\controllers;

use app\models\Bitacora;
use app\models\BitacoraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * BitacoraController implements the CRUD actions for Bitacora model.
 */
class BitacoraController extends Controller
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
     * Lists all Bitacora models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BitacoraSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bitacora model.
     * @param string $id_bit Id Bit
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_bit)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_bit),
        ]);
    }

    /**
     * Creates a new Bitacora model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bitacora();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_bit' => $model->id_bit]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bitacora model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_bit Id Bit
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_bit)
    {
        $model = $this->findModel($id_bit);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_bit' => $model->id_bit]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bitacora model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_bit Id Bit
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_bit)
    {
        $this->findModel($id_bit)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bitacora model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_bit Id Bit
     * @return Bitacora the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_bit)
    {
        if (($model = Bitacora::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
