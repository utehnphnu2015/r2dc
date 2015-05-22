<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;
use yii;

class DashboardController extends \yii\web\Controller {

    public function actionIndex() {
        $connection = Yii::$app->db;
        $type = 1;
        $sql = "SELECT tg.id,tg.topic,SUM(target) AS target,SUM(work) AS twork,
                        IF((SUM(work)/SUM(target))*100<>'',(SUM(work)/SUM(target))*100,0) AS persent
                        FROM topic_moph tg
                        LEFT JOIN kpi_moph kr ON kpi_id=tg.id AND rep_year=YEAR(CURDATE())
                        GROUP BY tg.id
                        ORDER BY id";
        if (isset($_GET['type'])) {
            if ($_GET['type'] == '2') {
                $sql = "SELECT tg.id,tg.topic,SUM(target) AS target,SUM(work) AS twork,
                        IF((SUM(work)/SUM(target))*100<>'',(SUM(work)/SUM(target))*100,0) AS persent
                        FROM topic_region tg
                        LEFT JOIN kpi_region kr ON kpi_id=tg.id AND rep_year=YEAR(CURDATE())
                        GROUP BY tg.id
                        ORDER BY id";
                $type = 2;
            } else if ($_GET['type'] == '3') {
                $sql = "SELECT tg.id,tg.topic,SUM(target) AS target,SUM(work) AS twork,
                        IF((SUM(work)/SUM(target))*100<>'',(SUM(work)/SUM(target))*100,0) AS persent
                        FROM topic_province tg
                        LEFT JOIN kpi_province kr ON kpi_id=tg.id AND rep_year=YEAR(CURDATE())
                        GROUP BY tg.id
                        ORDER BY id";
                $type = 3;
            } else if ($_GET['type'] == '4') {
                $sql = "SELECT tg.id,tg.topic,SUM(target) AS target,SUM(work) AS twork,
                        IF((SUM(work)/SUM(target))*100<>'',(SUM(work)/SUM(target))*100,0) AS persent
                        FROM topic_qof tg
                        LEFT JOIN kpi_qof kr ON kpi_id=tg.id AND rep_year=YEAR(CURDATE())
                        GROUP BY tg.id
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
