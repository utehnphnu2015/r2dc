<?php

namespace app\controllers;

use Yii;
use app\models\KpiType2;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Kpitype2Controller implements the CRUD actions for KpiType2 model.
 */
class Kpitype2Controller extends Controller {

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
     * Lists all KpiType2 models.
     * @return mixed
     */
    public function actionIndex($rep_year = null, $kpi_id = null) {
        $dataProvider = new ActiveDataProvider([
            'query' => KpiType2::find()->where(['kpi_id' => $kpi_id]),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'kpi_id' => $kpi_id,
                    'rep_year' => $rep_year,
        ]);
    }

    /**
     * Displays a single KpiType2 model.
     * @param string $kpi_id
     * @param string $rep_year
     * @return mixed
     */
    public function actionView($kpi_id, $rep_year) {
        return $this->render('view', [
                    'model' => $this->findModel($kpi_id, $rep_year),
        ]);
    }

    /**
     * Creates a new KpiType2 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($rep_year = null, $kpi_id = null) {
        $model = new KpiType2();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'rep_year' => $rep_year,
                        'kpi_id' => $kpi_id,
            ]);
        }
    }

    /**
     * Updates an existing KpiType2 model.
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
     * Deletes an existing KpiType2 model.
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
     * Finds the KpiType2 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kpi_id
     * @param string $rep_year
     * @return KpiType2 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kpi_id, $rep_year) {
        if (($model = KpiType2::findOne(['kpi_id' => $kpi_id, 'rep_year' => $rep_year])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
