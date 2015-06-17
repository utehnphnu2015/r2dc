<?php

namespace app\controllers;

use Yii;
use app\models\KpiType3;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Kpitype3Controller implements the CRUD actions for KpiType3 model.
 */
class Kpitype3Controller extends Controller {

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
     * Lists all KpiType3 models.
     * @return mixed
     */
    public function actionIndex($rep_year = null, $kpi_id = null) {
        $dataProvider = new ActiveDataProvider([
            'query' => KpiType3::find()->where(['kpi_id' => $kpi_id]),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id' => $kpi_id
        ]);
    }

    /**
     * Displays a single KpiType3 model.
     * @param string $kpi_id
     * @param string $rep_year
     * @return mixed
     */
    public function actionView($kpi_id, $rep_year, $provcode) {
        return $this->render('view', [
                    'kpi_id' => $kpi_id,
                    'rep_year' => $rep_year,
                    'provcode' => $provcode
        ]);
    }

    /**
     * Creates a new KpiType3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($rep_year = null, $kpi_id = null,$provcode=null) {
        $model = new KpiType3();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'provcode' => $model->provcode]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'rep_year' => $rep_year,
                        'kpi_id' => $kpi_id,
                        'provcode' => $provcode
            ]);
        }
    }

    /**
     * Updates an existing KpiType3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kpi_id
     * @param string $rep_year
     * @return mixed
     */
    public function actionUpdate($kpi_id, $rep_year) {
        $model = $this->findModel($kpi_id, $rep_year);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing KpiType3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kpi_id
     * @param string $rep_year
     * @return mixed
     */
    public function actionDelete($kpi_id, $rep_year) {
        $this->findModel($kpi_id, $rep_year)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KpiType3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kpi_id
     * @param string $rep_year
     * @return KpiType3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kpi_id, $rep_year) {
        if (($model = KpiType3::findOne(['kpi_id' => $kpi_id, 'rep_year' => $rep_year])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
