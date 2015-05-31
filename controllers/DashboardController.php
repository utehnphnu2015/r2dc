<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;
use Yii;

class DashboardController extends \yii\web\Controller {

    public function actionIndex($type = 1) {
        $connection = Yii::$app->db;
        if ($type == '1') {
            $sql = "SELECT id,topic,round(sum(total)*100/sum(target),2) AS percent
FROM topic_moph tr
LEFT JOIN kpi_moph kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
        }

        if ($type == '2') {
            $sql = "SELECT id,topic,round(sum(total)*100/sum(target),2) AS percent
FROM topic_region tr
LEFT JOIN kpi_region kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
        }
        if ($type == '3') {
            $sql = "SELECT id,topic,round(sum(total)*100/sum(target),2) AS percent
FROM topic_province tr
LEFT JOIN kpi_province kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY  id
ORDER BY id";
        }
        if ($type == '4') {
            $sql = "SELECT id,topic,round(sum(total)*100/sum(target),2) AS percent
FROM topic_qof tr
LEFT JOIN kpi_qof kr ON kr.kpi_id=tr.id AND rep_year=YEAR(CURDATE())
GROUP BY id
ORDER BY id";
        }



        $row = $connection->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
                /* 'pagination' => [
                  'pageSize' => 2,
                  ] */
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'type'=>$type
        ]);
    }

}
