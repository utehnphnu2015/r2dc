<?php

namespace app\controllers;

use Yii;
use app\models\KpiTest;
use app\models\KpiTestSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KpiTestController implements the CRUD actions for KpiTest model.
 */
class KpiTestController extends Controller {

    public $enableCsrfValidation = false;

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all KpiTest models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new KpiTestSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KpiTest model.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return mixed
     */
    public function actionView($kpi_id, $rep_year, $hospcode) {
        return $this->render('view', [
                    'model' => $this->findModel($kpi_id, $rep_year, $hospcode),
        ]);
    }

    /**
     * Creates a new KpiTest model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new KpiTest();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing KpiTest model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return mixed
     */
    public function actionUpdate($kpi_id, $rep_year, $hospcode) {
        $model = $this->findModel($kpi_id, $rep_year, $hospcode);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing KpiTest model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return mixed
     */
    public function actionDelete($kpi_id, $rep_year, $hospcode) {
        $this->findModel($kpi_id, $rep_year, $hospcode)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KpiTest model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return KpiTest the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kpi_id, $rep_year, $hospcode) {
        if (($model = KpiTest::findOne(['kpi_id' => $kpi_id, 'rep_year' => $rep_year, 'hospcode' => $hospcode])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
