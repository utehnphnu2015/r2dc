<?php

namespace app\controllers;

use yii\data\ArrayDataProvider;
use Yii;

class DashboardController extends \yii\web\Controller {

    public function actionIndex() {
        
        return $this->render('index');
    
    }

}
