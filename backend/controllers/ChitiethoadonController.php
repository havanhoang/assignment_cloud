<?php

namespace backend\controllers;

use Yii;
use app\models\chitiethoadon;
use app\models\Searchchitiethoadon;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChitiethoadonController implements the CRUD actions for chitiethoadon model.
 */
class ChitiethoadonController extends Controller
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
     * Lists all chitiethoadon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Searchchitiethoadon();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single chitiethoadon model.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionView($MaSP, $MaHD)
    {
        return $this->render('view', [
            'model' => $this->findModel($MaSP, $MaHD),
        ]);
    }

    /**
     * Creates a new chitiethoadon model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new chitiethoadon();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaHD' => $model->MaHD]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing chitiethoadon model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionUpdate($MaSP, $MaHD)
    {
        $model = $this->findModel($MaSP, $MaHD);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MaSP' => $model->MaSP, 'MaHD' => $model->MaHD]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing chitiethoadon model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $MaSP
     * @param string $MaHD
     * @return mixed
     */
    public function actionDelete($MaSP, $MaHD)
    {
        $this->findModel($MaSP, $MaHD)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the chitiethoadon model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $MaSP
     * @param string $MaHD
     * @return chitiethoadon the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MaSP, $MaHD)
    {
        if (($model = chitiethoadon::findOne(['MaSP' => $MaSP, 'MaHD' => $MaHD])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
