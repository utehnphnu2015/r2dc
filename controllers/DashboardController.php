<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;
use yii;

class DashboardController extends \yii\web\Controller {

    public function actionIndex() {
        $connection = Yii::$app->db;
        $type = 1;
        $sql = "SELECT id,topic,AVG(ratio) AS percent
FROM topic_moph tr
LEFT JOIN kpi_moph kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
        if (isset($_GET['type'])) {
            if ($_GET['type'] == '2') {
                $sql = "SELECT id,topic,AVG(ratio) AS percent
FROM topic_region tr
LEFT JOIN kpi_region kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
                $type = 2;
            } else if ($_GET['type'] == '3') {
                $sql = "SELECT id,topic,AVG(ratio) AS percent
FROM topic_province tr
LEFT JOIN kpi_province kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
                $type = 3;
            } else if ($_GET['type'] == '4') {
                $sql = "SELECT id,topic,AVG(ratio) AS percent
FROM topic_qof tr
LEFT JOIN kpi_qof kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY id
ORDER BY id";
                $type = 4;
            }
        }



        $row = $connection->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
                /* 'pagination' => [
                  'pageSize' => 2,
                  ] */
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider, 'type' => $type]);
    }

}
