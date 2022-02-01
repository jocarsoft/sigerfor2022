<?php

namespace app\controllers;
use Yii;
use app\models\Autorizacionesmod;
use app\models\TituloHabilitante;
use app\models\AutorizacionesmodSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use kartik\mpdf\Pdf;


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
        //Yii::$app()->request->sendFile("test.xls", "<table><tr><td>This is a test</td><td>This is a test</td></tr></table>");
        
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
// Accion exportar excel
public function actionExportExcel2()
{
    $searchModel = new AutorizacionesmodSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    
    // Inicializar la instancia de TBS
    $OpenTBS = new \hscstudio\export\OpenTBS; // nueva instancia de TBS
    // Cambia con Tu plantilla excel
    $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/dataAutorizacionesmod.xlsx';
    $OpenTBS->LoadTemplate($template); // También combine algunos campos automáticos [onload] (depende del tipo de documento).
    //$OpenTBS->VarRef['modelName']= "AutorizacionesmodSearch";				
    $data = [];
    $id=1;
    foreach($dataProvider->getModels() as $automod){
        $data[] = [
            'id' => $id++,
            'SEDDSC' => $automod->SEDDSC,
            'NUMAUT' => $automod->NUMAUT,
            'ASIGNA' => $automod->ASIGNA,
            'TIPDOC' => $automod->TIPDOC,
            'FECLEG' => $automod->FECLEG,
            'NOMDIS' => $automod->NOMDIS,
            'SUPAPR' => $automod->SUPAPR,
            'CODACT' => $automod->CODACT,
            'FECINI' => $automod->FECINI,
            'FECTER' => $automod->FECTER,
            'SITUAC' => $automod->SITUAC,
            'ESTMOD' => $automod->ESTMOD,
            'ESTCON' => $automod->ESTCON,
            'FECCON' => $automod->FECCON,
            'ESTOSI' => $automod->ESTOSI,
            'FECOSI' => $automod->FECOSI,
            'TIPANB' => $automod->TIPANB,
            'SUPRES' => $automod->SUPRES,
            'PAGO' => $automod->PAGO,
            'DESTIN' => $automod->DESTIN,
            'OBSERV' => $automod->OBSERV,
            'GCLOUD' => $automod->GCLOUD,
            'id_usuario' => $automod->id_usuario,
            'fecha_registro' => $automod->fecha_registro,
        ];
    }

    $OpenTBS->MergeBlock('data', $data);
    // Muestra el resultado como un archivo en el servidor. Puede cambiar el archivo de salida
    $OpenTBS->Show(OPENTBS_DOWNLOAD, 'data_Autorizacionesmod.xlsx'); // También fusiona todos los campos automáticos [onshow].			
    exit;
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
