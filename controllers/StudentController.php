<?php

namespace app\controllers;
use yii;
use yii\data\ArrayDataProvider;


class StudentController extends \yii\web\Controller {

    public function queryAll($sql) {
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    
    
    public function actionIndex($rep_year =2015 ) {
        $sql = "SELECT c.provcode,a.ampname,c.hospcode,c.hosname,
sum(k.target1) as target1,sum(k.result1) as result1,round(((sum(k.result1)/sum(k.target1))*100),2) as ratio1,
sum(k.target2) as target2,sum(k.result2) as result2,round(((sum(k.result2)/sum(k.target2))*100),2) as ratio2 
from chospital2 c
LEFT OUTER JOIN campur a on a.provcode=c.provcode and a.ampcode=c.ampcode
LEFT OUTER JOIN kpi_student_fat k on k.hospcode=c.hospcode
where rep_year='$rep_year'+543
group by k.hospcode
ORDER BY k.provcode,c.ampcode,k.hospcode";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
            'pagination'=>FALSE
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider
        ]);
    }
    
     public function actionCtyp3($rep_year =2015)
    {
         $sql = "SELECT a.provcode,a.provname,
sum(k.target1) as target1,sum(k.result1) as result1,round(((sum(k.result1)/sum(k.target1))*100),2) as ratio1,
sum(k.target2) as target2,sum(k.result2) as result2,round(((sum(k.result2)/sum(k.target2))*100),2) as ratio2 
from cchangwat a 
LEFT OUTER JOIN kpi_student_fat k on k.provcode=a.provcode
where k.rep_year='$rep_year'+543
group by a.provcode
ORDER BY a.provcode";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
             'pagination'=>FALSE
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider,
                    'rep_year'=>$rep_year,
        ]);
    }
    
    
    
    public function  actionType3($rep_year =2015){
        
           $sql = "SELECT a.provcode,a.provname,
sum(k.target1) as target1,sum(k.result1) as result1,round(((sum(k.result1)/sum(k.target1))*100),2) as ratio1,
sum(k.target2) as target2,sum(k.result2) as result2,round(((sum(k.result2)/sum(k.target2))*100),2) as ratio2 
from cchangwat a 
LEFT OUTER JOIN kpi_student_fat k on k.provcode=a.provcode
where k.rep_year='$rep_year'+543
group by a.provcode
ORDER BY a.provcode";

        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
             'pagination'=>FALSE
        ]);

        return $this->render('type3', [
                    'dataProvider' => $dataProvider,
                    'rep_year'=>$rep_year,
        ]);
        
        
    }
    
    public function actionType2($rep_year,$provcode) {
        
        $sql="select c.provcode,c.provname,a.ampcode,a.ampname,
sum(k.target1) as target1,sum(k.result1) as result1,round(((sum(k.result1)/sum(k.target1))*100),2) as ratio1,
sum(k.target2) as target2,sum(k.result2) as result2,round(((sum(k.result2)/sum(k.target2))*100),2) as ratio2 
from campur a
left outer join chospital2 h on h.provcode=a.provcode and h.ampcode=a.ampcode
LEFT OUTER JOIN kpi_student_fat k on  k.hospcode=h.hospcode 
LEFT OUTER JOIN cchangwat c on c.provcode=a.provcode
where k.rep_year='$rep_year'+543  AND k.provcode='$provcode'
GROUP BY a.provcode,a.ampcode 
ORDER BY a.provcode,a.ampcode ";
        
        
        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
             'pagination'=>FALSE
        ]);

        return $this->render('type2', [
                    'dataProvider' => $dataProvider,
                    'rep_year'=>$rep_year,
        ]);
        
    }
    
    public function actionType1($rep_year,$provcode,$ampcode){
        $sql="SELECT c.provcode,a.ampname,a.ampcode,c.hospcode,c.hosname,
sum(k.target1) as target1,sum(k.result1) as result1,round(((sum(k.result1)/sum(k.target1))*100),2) as ratio1,
sum(k.target2) as target2,sum(k.result2) as result2,round(((sum(k.result2)/sum(k.target2))*100),2) as ratio2 
from chospital2 c
LEFT OUTER JOIN campur a on a.provcode=c.provcode and a.ampcode=c.ampcode
LEFT OUTER JOIN kpi_student_fat k on k.hospcode=c.hospcode
WHERE rep_year='$rep_year'+543 AND k.provcode='$provcode' AND c.ampcode='$ampcode'
group by k.hospcode
ORDER BY k.provcode,c.ampcode,k.hospcode";
        $raw = $this->queryAll($sql);
        $dataProvider = new ArrayDataProvider([
            'allModels' => $raw,
             'pagination'=>FALSE
        ]);

        return $this->render('type1', [
                    'dataProvider' => $dataProvider,
                    'rep_year'=>$rep_year,
        ]);
    }
    

}
