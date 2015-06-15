<?php

namespace app\controllers;
use Yii;

class AjaxController extends \yii\web\Controller {

    public function queryall($sql) {
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    


    public function actionGetAmp($p = null) {
        Yii::$app->response->format = "json";
        
        $sql = "SELECT * from campur  where provcode=$p ";
        $raw = $this->queryall($sql);
        return $raw;      
        
    }

    public function actionGetHos($p = null, $a = null) {
        
    }

}
