<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;

use app\models\TopicRegion;

class RegionController extends \yii\web\Controller {

    
    
    public function db(){
       return Yii::$app->db; 
    } 


    public function actionIndex($rep_year=2015) {// แสดงทุกรายการ kpi เขต
        
        $sql ="  SELECT  t.id,($rep_year+543) as 'rep_year',t.topic,t.target,t.total,round(t.total*100/t.target,2) as ratio  from (
SELECT id,topic 
,(SELECT SUM(k.target) from kpi_region k WHERE k.kpi_id = t.id and k.rep_year=$rep_year) as target
,(SELECT SUM(k.total) from kpi_region k WHERE k.kpi_id = t.id and k.rep_year=$rep_year) as total

FROM topic_region t 
) t ";
        $raw = $this->db()->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels'=>$raw
        ]);
        
        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'rep_year'=>$rep_year
        ]);
    }    
    
    public function actionChangwat() {
        
    }// จบรายจังหวัด
    
    public function actionAmpur() {
       
    } // จบรายอำเภอ
    
    
    public function actionHospital() {
       
    }//จบรายหน่วยงาน

}
