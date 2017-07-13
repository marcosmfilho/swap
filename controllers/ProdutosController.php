<?php

namespace app\controllers;

use app\models\ProdutosModel;
use app\models\ProdutosSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * ProdutosController implements the CRUD actions for ProdutosModel model.
 */
class ProdutosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProdutosModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdutosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $model = ProdutosModel::find()->orderBy('idprodutos DESC')->asArray()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model'=>$model
        ]);
    }
    
    public function actionFiltro()
    {
        $searchModel = new ProdutosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $post = Yii::$app->request->post();
        if($post['valor']){
            $valor = $post['valor'];
            $model = ProdutosModel::find()->orderBy('idprodutos DESC')
                    ->andFilterWhere(['like', 'title', $valor])
                    ->orFilterWhere(['like', 'category', $valor])
                    ->asArray()->all();
            if(count($model) == 0){
                return "Nenhum resultado encontrado";
            }else{
                return $this->renderAjax('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'model'=>$model
                ]);
            }
        }
    }

    /**
     * Displays a single ProdutosModel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProdutosModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProdutosModel();
        $post = Yii::$app->request->post();
        if ($model->load($post)) {
            $model->date = strval(date("d/m/Y H:i:s"));
            $model->user_id = "1";
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imageFile->saveAs('img/produtos/' . $model->imageFile->baseName . '.' . $model->imageFile->extension);
            // rewrite the file attribute to saved url of the file.
            $model->images = $model->imageFile->baseName . '.' . $model->imageFile->extension;
            $model->imageFile = null;
            $model->save();
            $this->redirect('/site');
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProdutosModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            $model->date = date("d/m/Y H:i:s");
            $model->user_id = "1";
            $model->images = "carro.jpg";
            if($model->save()){
                return $this->redirect('/site/index');
            }else{
                die("Não foi possível publicar o produto");
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProdutosModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProdutosModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProdutosModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProdutosModel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
