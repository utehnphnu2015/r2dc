<?php

namespace app\controllers;

class MophController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
