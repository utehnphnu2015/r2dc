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
        $sql = "SELECT k.rep_year,k.provcode,c2.provname,c.hospname,k.sumcase,k.sumadjrw,k.refcmi
FROM kpi_cmi k,chos c,cchangwat c2
where k.hospcode=c.hospcode and k.provcode=c2.provcode and k.rep_year=2015
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

// จบภาพรวมเขต

    public function actionChangwat($kpi_id, $rep_year) {
        //echo $kpi_id.'ff';
        $sql = " SELECT t.rep_year,t.kpi_id,p.provcode,p.provname,t.target,t.total,ROUND((t.total*100/t.target),2) as ratio
            
,t.mon1,t.mon2,t.mon3,t.mon4,t.mon5,t.mon6,t.mon7,t.mon8,t.mon9,t.mon10,t.mon11,t.mon12

from cchangwat p LEFT JOIN (

SELECT 
k.rep_year,k.kpi_id,k.provcode,sum(k.target) as target,sum(k.total) as total 
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

from kpi_type_total k 

where k.kpi_id = '$kpi_id' and k.rep_year =$rep_year 
GROUP BY k.provcode ) 
t on t.provcode = p.provcode ";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('changwat', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id' => $kpi_id,
        ]);
    }

// จบรายจังหวัด

    public function actionAmpur($kpi_id, $rep_year, $provcode) {
        $sql = " SELECT t.rep_year,t.kpi_id,a.provcode,a.ampcode,a.ampname
          ,t.target,t.total,ROUND(t.total*100/t.target,2) as ratio 
          
,t.mon1,t.mon2,t.mon3,t.mon4,t.mon5,t.mon6,t.mon7,t.mon8,t.mon9,t.mon10,t.mon11,t.mon12

FROM campur a  LEFT JOIN (

SELECT
k.rep_year,k.kpi_id,k.provcode,k.ampcode,sum(k.target) as target,sum(k.total) as total 
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

 from kpi_type_total k 
 
WHERE k.kpi_id =  '$kpi_id' and k.rep_year = $rep_year

GROUP BY  CONCAT(k.provcode,k.ampcode)
) t on t.provcode = a.provcode and t.ampcode = a.ampcode
WHERE a.provcode = $provcode  ";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('ampur', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id' => $kpi_id,
                    'provcode' => $provcode,
        ]);
    }

// จบรายอำเภอ

    public function actionHospital($kpi_id, $rep_year, $provcode, $ampcode) {

        $sql = " SELECT t.rep_year,t.kpi_id,h.hospcode,trim(h.hosname) as hosname,t.target,t.total,t.ratio
,t.mon1,t.mon2,t.mon3,t.mon4,t.mon5,t.mon6,t.mon7,t.mon8,t.mon9,t.mon10,t.mon11,t.mon12
from chospital2 h  LEFT JOIN (
SELECT 
k.rep_year,k.kpi_id,k.provcode,k.ampcode,k.hospcode
,k.target
,k.total
,k.ratio
,k.mon1,k.mon2,k.mon3,k.mon4,k.mon5,k.mon6,k.mon7,k.mon8,k.mon9,k.mon10,k.mon11,k.mon12
FROM kpi_type_total k 

WHERE k.rep_year = $rep_year and k.kpi_id = '$kpi_id'
) t on  t.hospcode = h.hospcode

WHERE  h.provcode=$provcode and h.ampcode=$ampcode ";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw
        ]);

        return $this->render('hospital', [
                    'dataProvider' => $dataProvider,
                    'rep_year' => $rep_year,
                    'kpi_id' => $kpi_id,
                    'provcode' => $provcode,
        ]);
    }

//จบรายหน่วยงาน
}
