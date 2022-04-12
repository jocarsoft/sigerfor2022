<?php

namespace backend\controllers;

use backend\models\Guia;
use backend\models\GuiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\EspecieGuia;
use backend\models\Constantesmod;
use backend\models\EspecieGuiaSearch;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;

/**
 * GuiaController implements the CRUD actions for Guia model.
 */
class GuiaController extends Controller
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
                            'actions' => ['logout', 'index', 'view', 'create', 'update', 'delete','list'], // add all actions to take guest to login page            
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
     * Lists all Guia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GuiaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guia model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)

    {

        //creamos el objeto que sera enviado a la vista Especie Plany        

        $modelG = new EspecieGuia();
        $modelG->id_guia = $id; //entonces ya estamos enviando un modelo especie relacionado. al form. 

        if($this->request->isPost){
            $modelG = new EspecieGuia();
            if ($modelG->load($this->request->post()) && $modelG->save()){


            }
        }

        $modelG->id_guia = $id;
        $searchModel = new EspecieGuiaSearch();
        //$dataProvider = $searchModel->search($this->request->queryParams);

        $query = EspecieGuia::find()->where(['id_guia' => $id]);

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
            'modeloGcontrolador' => $modelG, //esto envia un modelo vacio, pero debemos saber que este Especie le corresponde a este plan
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionList($id)
    {
        $contador = Constantesmod::find()
        ->andFilterWhere(['like', 'DESCRIPCION',$id])
        ->count();
        
        $query = Constantesmod::find()->andFilterWhere(['like', 'DESCRIPCION',$id])->all();
        
        



       // $contardistrito = Constantesmod::find()
          //  ->like(['code'=>$id])
         //   ->count();

          /*  $distrito = Constantesmod::find()
            ->where(['code_'=>$id])
            ->all();*/

            if($contador>0){

              $i= 0;      

            foreach($query as $query2){

              echo "<option value'".$query2->CODE."'>".$query2->DESCRIPCION."</option>";
                    }
            }
             else {
            echo "<option>-</option>";
            
                }
    }




    /**
     * Creates a new Guia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Guia();

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
     * Updates an existing Guia model.
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
     * Deletes an existing Guia model.
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
     * Finds the Guia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Guia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guia::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
