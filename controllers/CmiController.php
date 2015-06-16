<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use app\models\TopicMoph;

class CmiController extends \yii\web\Controller {

    public function queryAll($sql) {
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function actionIndex($rep_year = 2015) {// แสดงทุกรายการ kpi เขต
        $sql = "SELECT k.rep_year,c.provname,c.hospcode,c.hospname,k.sumcase,k.sumadjrw,k.refcmi
FROM kpi_cmi k,chos c
where k.hospcode=c.hospcode and k.rep_year=$rep_year
ORDER BY k.provcode";
        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year
        ]);
    }


}
