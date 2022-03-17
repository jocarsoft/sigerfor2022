<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\PlanesManejo;
use app\models\EspeciePlan;
use app\models\EspeciePlanSearch;
use app\models\TituloHabilitante;
use app\models\Regente;
use app\models\Buscador;
use app\models\PlanesManejoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

use yii\filters\AccessControl;

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
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [            
                            'actions' => ['login', 'error'],            
                            'allow' => true,            
                        ],            
                        [            
                            'actions' => ['logout', 'index', 'view', 'create', 'update', 'delete', 'vista' ], // add all actions to take guest to login page            
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

        $model = new PlanesManejo();


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
            }else if($model->load($this->request->post())){ //guardamos el plan de manejo
        
                         if ($model->save()) {
                             return $this->redirect(['view', 'id' => $model->id]);
                         }
            
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
        
        
        }else{
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

        //creamos el objeto que sera enviado a la vista Especie Plany        

        $modelEP = new EspeciePlan();
        $modelEP->id_plan = $id; //entonces ya estamos enviando un modelo especie relacionado. al form. 

        if($this->request->isPost){
            $modelEP = new EspeciePlan();
            if ($modelEP->load($this->request->post()) && $modelEP->save()){


            }
        }

        $modelEP->id_plan = $id;
        $searchModel = new EspeciePlanSearch();
        //$dataProvider = $searchModel->search($this->request->queryParams);

        $query = EspeciePlan::find()->where(['id_plan' => $id]);

            $dataProvider = new ActiveDataProvider([
                'query' => $query,
                'pagination' => [
                    'pageSize' => 10,
                ],
               /* 'sort' => [
                    'defaultOrder' => [
                        'created_at' => SORT_DESC,
                        'title' => SORT_ASC, 
                    ]
                ],*/
            ]);




        //ahora proceura hacer el registro.  debe estar dentro de este mismo action. ok?
        //el registro de los datos de especie plan?? 

        //aqui se envia info a la vista
        return $this->render('view', [
            'model' => $this->findModel($id), //$this->findModel($id) esto busca en la bd al objeto PlanesMaenjo por ID y lo envia a la vista. //haremos los mismo pero conEspeciesPlan
            'modeloEPcontrolador' => $modelEP, //esto envia un modelo vacio, pero debemos saber que este Especie le corresponde a este plan
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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

    public function actionCreateEspecies_Plan()
    {
        $model = new EspeciePlan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
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
