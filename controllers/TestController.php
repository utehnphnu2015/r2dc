<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;

class TestController extends \yii\web\Controller {

     public function queryAll($sql) {
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function actionIndex() {
        $connection = Yii::$app->db;
        $sql = "SELECT hoscode,provcode,distcode FROM chospital2 WHERE provcode='62'";
        $data = $connection->createCommand($sql)
                ->queryAll();

        for ($i = 0; $i < sizeof($data); $i++) {
            $hoscode = $data[$i]['hoscode'];
            $provcode = $data[$i]['provcode'];
            $distcode = $data[$i]['distcode'];
            $kpi_id = '1';
            $rep_year = '2015';
            $month = '1';
            $target = 25;
            $work = 2;
            while ($month <= 6) {
                $data1 = $connection->createCommand("insert  IGNORE into kpi_region values 
                        ('1','$rep_year','$month','$hoscode','$provcode','$distcode','$target','$work') ")->execute();
                $month++;
                $target = 0;
                $work = $work + 4;
            }
        }
        return $this->render('index');
    }

    public function actionTest1() {

        $connection = Yii::$app->db;
        $sql = "SELECT 'aa' AS t1,'20' AS s1 
UNION 
SELECT 'bb' AS t1,'34' AS s1 
UNION 
SELECT 'cc' AS t1,'25' AS s1
UNION 
SELECT 'dd' AS t1,'77' AS s1";
        $data = $connection->createCommand($sql)
                ->queryAll();
        for ($i = 0; $i < sizeof($data); $i++) {
            $t1[] = $data[$i]['t1'];
            $s1[] = $data[$i]['s1'];
        }
        return $this->render('test1',['t1'=>$t1,'s1'=>$s1]);
    }
    
    public function actionTest2(){
        $sql ="select * from topic_qof";
        $raw = $this->queryAll($sql);
        
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);
        return $this->render('test2',[
            'dataProvider'=>$dataProvider
        ]);
                
    }

}
