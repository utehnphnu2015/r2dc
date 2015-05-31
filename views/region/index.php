<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'สร้างเสริมภูมิคุ้มกันโรค', 'url' => ['epi/index']];
$this->params['breadcrumbs'][] = ['label' => 'เด็กอายุ 5 ปีได้รับวัคซีน DTP5', 'url' => ['epi/report1']];
$this->params['breadcrumbs'][] = 'รายบุคคล';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa  fa-windows"></i> รายการตัวชี้วัดระดับเขต</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <?php
        echo GridView::widget([
            //echo \kartik\grid\GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                [
                    'attribute' => 'id',
                    'label'=>'KPI'
                ],
                [
                    'attribute' => 'topic',
                     'label'=>'ตัวชี้วัด',
                    'format' => 'raw',
                    'value' => function($data) {
                        return Html::a($data['topic'],['region/changwat','kpi_id'=>$data['id']]);
                    }
                ],
                [
                    'attribute' => 'target',
                    'label'=>'เป้าหมาย'
                ],
                [
                    'attribute' => 'total',
                     'label'=>'ผลงาน'
                ],
                [
                    'attribute' => 'ratio',
                     'label'=>'ร้อยละ'
                ],
            ]
        ]);
        ?>

        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->