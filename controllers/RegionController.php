<?php

namespace app\controllers;

use yii;
use yii\data\ArrayDataProvider;

class RegionController extends \yii\web\Controller {

    public function actionIndex() {
        $year='2015';
        $connection = Yii::$app->db;
        $sql = "";
        $row = $connection->createCommand('SELECT id,topic FROM topic_region')
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
            'pagination' => [
                'pageSize' => 2,
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
    
    
    public function actionChangwat() {
        $year='2015';
        $connection = Yii::$app->db;
        $sql = "SELECT provcode,CONCAT(provcode,ampcode) AS prov,ch.changwatname,MAX(rep_year)+543 AS rep_year,SUM(target) AS target,SUM(work) AS work,
 (SUM(work)/SUM(target))*100 AS percent,
SUM(IF(rep_year=$year-1 AND month='10',work,0 )) AS m10,
SUM(IF(rep_year=$year-1 AND month='11',work,0 )) AS m11,
SUM(IF(rep_year=$year-1 AND month='12',work,0 )) AS m12,
SUM(IF(rep_year=$year-1 AND month IN('10','11','12'),work,0 )) AS t1,
SUM(IF(rep_year=$year AND month='01',work,0 )) AS m01,
SUM(IF(rep_year=$year AND month='02',work,0 )) AS m02,
SUM(IF(rep_year=$year AND month='03',work,0 )) AS m03,
SUM(IF(rep_year=$year AND month IN('01','02','03'),work,0 )) AS t2,
SUM(IF(rep_year=$year AND month='04',work,0 )) AS m04,
SUM(IF(rep_year=$year AND month='05',work,0 )) AS m05,
SUM(IF(rep_year=$year AND month='06',work,0 )) AS m06,
SUM(IF(rep_year=$year AND month IN('04','05','06'),work,0 )) AS t3,
SUM(IF(rep_year=$year AND month='07',work,0 )) AS m07,
SUM(IF(rep_year=$year AND month='08',work,0 )) AS m08,
SUM(IF(rep_year=$year AND month='09',work,0 )) AS m09,
SUM(IF(rep_year=$year AND month IN('07','08','09'),work,0 )) AS t4
FROM kpi_region r
INNER JOIN cchangwat ch ON ch.changwatcode=provcode
WHERE rep_year BETWEEN $year-1 AND $year 
GROUP BY provcode";
        
         $data = $connection->createCommand($sql)
                ->queryAll();

        for ($i = 0; $i < sizeof($data); $i++) {
            $percent[] = $data[$i]['percent'];
            $changwatname[] = $data[$i]['changwatname'];
            $work[] = $data[$i]['work'];
            
        }
        
        
        $row = $connection->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
            /*'pagination' => [
                'pageSize' => 2,
            ]*/
        ]);
        return $this->render('changwat', ['dataProvider' => $dataProvider,
                            'percent'=>$percent,
                            'changwatname'=>$changwatname,
                            'work'=>$work,
                            ]);
    }
    
    public function actionAmpur() {
        if(isset($_GET['year'])){
            $year=$_GET['year']-543;
            $chw=$_GET['chw'];
            
        }
        
        $connection = Yii::$app->db;
        $sql = "SELECT provcode,ampcode,CONCAT(provcode,ampcode) AS prov,a.ampurname,MAX(rep_year)+543 AS rep_year,
            SUM(target) AS target,SUM(work) AS work,
            (SUM(work)/SUM(target))*100 AS percent,
            SUM(IF(rep_year=$year-1 AND month='10',work,0 )) AS m10,
SUM(IF(rep_year=$year-1 AND month='11',work,0 )) AS m11,
SUM(IF(rep_year=$year-1 AND month='12',work,0 )) AS m12,
SUM(IF(rep_year=$year-1 AND month IN('10','11','12'),work,0 )) AS t1,
SUM(IF(rep_year=$year AND month='01',work,0 )) AS m01,
SUM(IF(rep_year=$year AND month='02',work,0 )) AS m02,
SUM(IF(rep_year=$year AND month='03',work,0 )) AS m03,
SUM(IF(rep_year=$year AND month IN('01','02','03'),work,0 )) AS t2,
SUM(IF(rep_year=$year AND month='04',work,0 )) AS m04,
SUM(IF(rep_year=$year AND month='05',work,0 )) AS m05,
SUM(IF(rep_year=$year AND month='06',work,0 )) AS m06,
SUM(IF(rep_year=$year AND month IN('04','05','06'),work,0 )) AS t3,
SUM(IF(rep_year=$year AND month='07',work,0 )) AS m07,
SUM(IF(rep_year=$year AND month='08',work,0 )) AS m08,
SUM(IF(rep_year=$year AND month='09',work,0 )) AS m09,
SUM(IF(rep_year=$year AND month IN('07','08','09'),work,0 )) AS t4
FROM kpi_region r
INNER JOIN campur a ON a.ampurcodefull=CONCAT(r.provcode,r.ampcode)
WHERE provcode=$chw
GROUP BY prov;";
        
        
        $row = $connection->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
            /*'pagination' => [
                'pageSize' => 2,
            ]*/
        ]);
        return $this->render('ampur', ['dataProvider' => $dataProvider ]);
    }
    
    
    public function actionHospital() {
        if(isset($_GET['year'])){
            $year=$_GET['year']-543;
            $chw=$_GET['chw'];
            $amp=$_GET['amp'];
        }
        
        $connection = Yii::$app->db;
        $sql = "SELECT r.provcode,r.ampcode,CONCAT(r.provcode,r.ampcode) AS prov,ch.hosname,MAX(rep_year)+543 AS rep_year,SUM(target) AS target,SUM(work) AS work,
(SUM(work)/SUM(target))*100 AS percent,
SUM(IF(rep_year=$year-1 AND month='10',work,0 )) AS m10,
SUM(IF(rep_year=$year-1 AND month='11',work,0 )) AS m11,
SUM(IF(rep_year=$year-1 AND month='12',work,0 )) AS m12,
SUM(IF(rep_year=$year-1 AND month IN('10','11','12'),work,0 )) AS t1,
SUM(IF(rep_year=$year AND month='01',work,0 )) AS m01,
SUM(IF(rep_year=$year AND month='02',work,0 )) AS m02,
SUM(IF(rep_year=$year AND month='03',work,0 )) AS m03,
SUM(IF(rep_year=$year AND month IN('01','02','03'),work,0 )) AS t2,
SUM(IF(rep_year=$year AND month='04',work,0 )) AS m04,
SUM(IF(rep_year=$year AND month='05',work,0 )) AS m05,
SUM(IF(rep_year=$year AND month='06',work,0 )) AS m06,
SUM(IF(rep_year=$year AND month IN('04','05','06'),work,0 )) AS t3,
SUM(IF(rep_year=$year AND month='07',work,0 )) AS m07,
SUM(IF(rep_year=$year AND month='08',work,0 )) AS m08,
SUM(IF(rep_year=$year AND month='09',work,0 )) AS m09,
SUM(IF(rep_year=$year AND month IN('07','08','09'),work,0 )) AS t4
FROM kpi_region r
INNER JOIN chospital2 ch ON ch.hoscode=r.hospcode
WHERE rep_year BETWEEN $year-1 AND $year  AND r.provcode=$chw AND ampcode=$amp
GROUP BY r.hospcode";
        $row = $connection->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $row,
            /*'pagination' => [
                'pageSize' => 2,
            ]*/
        ]);
        return $this->render('hospital', ['dataProvider' => $dataProvider]);
    }

}
