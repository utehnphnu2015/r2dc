<?php

namespace app\controllers;

use Yii;
use app\models\KpiType1;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Kpitype1Controller implements the CRUD actions for KpiType1 model.
 */
class Kpitype1Controller extends Controller {

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
     * Lists all KpiType1 models.
     * @return mixed
     */
    public function actionIndex($rep_year = null, $kpi_id = null) {
        $dataProvider = new ActiveDataProvider([
            'query' => KpiType1::find()->where(['kpi_id'=>$kpi_id]),
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id' => $kpi_id
        ]);
    }

    /**
     * Displays a single KpiType1 model.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return mixed
     */
    public function actionView($kpi_id, $rep_year, $hospcode) {
        return $this->render('view', [
                    'model' => $model,
                    'kpi_id'=>$kpi_id,
                    'rep_year'=>$rep_year,
                    'hospcode'=>$hospcode
        ]);
    }

    /**
     * Creates a new KpiType1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($rep_year = null, $kpi_id = null) {
        $model = new KpiType1();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'rep_year' => $rep_year,
                        'kpi_id' => $kpi_id
            ]);
        }
    }

    /**
     * Updates an existing KpiType1 model.
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
     * Deletes an existing KpiType1 model.
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
     * Finds the KpiType1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kpi_id
     * @param string $rep_year
     * @param string $hospcode
     * @return KpiType1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kpi_id, $rep_year, $hospcode) {
        if (($model = KpiType1::findOne(['kpi_id' => $kpi_id, 'rep_year' => $rep_year, 'hospcode' => $hospcode])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
