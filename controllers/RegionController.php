<?php

namespace app\controllers;

use Yii;
use yii\data\ArrayDataProvider;
use app\models\TopicRegion;

class RegionController extends \yii\web\Controller {

    public function db() {
        return Yii::$app->db;
    }

    public function actionIndex($rep_year = 2015) {// แสดงทุกรายการ kpi เขต
        $sql = "  SELECT  t.id,($rep_year+543) as 'rep_year',t.topic
            ,if(t.target is null,0,t.target) as target
            ,if(t.total is null,0,t.total) as total
            ,if(target is null,0.00,round(t.total*100/t.target,2)) as ratio  from 
            ( SELECT id,topic 
,(SELECT SUM(k.target) from kpi_region k WHERE k.kpi_id = t.id and k.rep_year=$rep_year) as target
,(SELECT SUM(k.total) from kpi_region k WHERE k.kpi_id = t.id and k.rep_year=$rep_year) as total

FROM topic_region t 
) t ";
        $raw = $this->db()->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year
        ]);
    } // จบภาพรวมเขต
    

    public function actionChangwat($kpi_id, $rep_year) {

        $sql = " SELECT 
p.provname,sum(k.target) as target,sum(k.total) as total 
, ROUND((sum(k.total)*100/sum(k.target)),2) as ratio
,sum(k.mon1) as mon1
,sum(k.mon2) as mon2
,sum(k.mon3) as mon3
,sum(k.mon4) as mon4
,sum(k.mon5) as mon5
,sum(k.mon6) as mon6
,sum(k.mon7) as mon7
,sum(k.mon8) as mon8
,sum(k.mon9) as mon9
,sum(k.mon10) as mon10
,sum(k.mon11) as mon11
,sum(k.mon12) as mon12
from kpi_region k  INNER JOIN cchangwat p on  p.provcode = k.provcode

where k.kpi_id = $kpi_id and k.rep_year = $rep_year 
GROUP BY k.provcode ";

        $raw = $this->db()->createCommand($sql)->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('changwat', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id'=>$kpi_id
        ]);
    }

// จบรายจังหวัด

    public function actionAmpur() {
        
    }

// จบรายอำเภอ

    public function actionHospital() {
        
    }

//จบรายหน่วยงาน
}
