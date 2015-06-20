<?php

use yii\helpers\Html;
use app\models\TopicAll;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */

$this->title = $kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'กลับ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$topic = TopicAll::find()->where(['id' => $kpi_id])->asArray()->one();
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-plus-sign"></i> 
            <?= Html::encode("ตัวชี้วัด : " . $kpi_id . "-" . $topic['topic']) ?>          
        </h3>

        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>

    </div>
    <div class="box-body">
        <div class="alert alert-info">
            <h4>
            <?php
            if ($feq === 'year') {
                echo "เก็บข้อมูลปีละครั้ง  ให้กรอกเฉพาะช่องเดือน กันยายน";
            }
            if ($feq === 'mon') {
                echo "เก็บข้อมูลเดือนละครั้ง";
            }
            ?>
            </h4>
        </div>
        <!--เริ่ม content-->

        <?=
        $this->render('_form', [
            'model' => $model,
            'rep_year' => $rep_year,
            'kpi_id' => $kpi_id,
            'provcode' => $provcode
        ])
        ?>

    </div>
</div>

