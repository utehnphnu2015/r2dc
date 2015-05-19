<?php

namespace app\controllers;
use yii;
class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
            $connection = Yii::$app->db;
        $sql="SELECT hoscode,provcode,distcode FROM chospital2 WHERE provcode='62'";
        $data = $connection->createCommand($sql)
                ->queryAll();

        for ($i = 0; $i < sizeof($data); $i++) {
            $hoscode = $data[$i]['hoscode'] ;
            $provcode = $data[$i]['provcode'];
            $distcode = $data[$i]['distcode'];
            $kpi_id='1';
            $rep_year='2015';
            $month='1';
            $target=25;
            $work=2;
            while ($month<=6){
                $data1 = $connection->createCommand("insert  IGNORE into kpi_region values 
                        ('1','$rep_year','$month','$hoscode','$provcode','$distcode','$target','$work') ")->execute();
                $month++;
                $target=0;
                $work=$work+4;
                
            }
            
        }
        return $this->render('index');
    }

}
