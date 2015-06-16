<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use app\models\TopicMoph;

class CmiController extends \yii\web\Controller {

    public function queryAll($sql) {
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function actionIndex($rep_year=2015) {// แสดงทุกรายการ kpi เขต
        $sql = "SELECT * from tmp_kpi_cmi ";
        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
            'pagination'=>FALSE
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year
        ]);
    }


}
