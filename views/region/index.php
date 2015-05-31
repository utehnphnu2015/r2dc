<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;

//$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['site/index']];

$this->params['breadcrumbs'][] = 'รายการตัวชี้วัดระดับเขต';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> รายการตัวชี้วัดระดับเขต</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>        
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <div class="btn-group" role="group" aria-label="...">
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2014']) ?>">2557</a>
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2015']) ?>">2558</a>
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2016']) ?>">2559</a>
        </div>
        <h4>ปีงบประมาณ <?= $rep_year + 543 ?></h4>
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'columns' => [
                  [
                    'attribute' => 'rep_year',
                    'label' => 'ปีงบ'
                ],
                [
                    'attribute' => 'id',
                    'label' => 'KPI'
                ],
               
                [
                    'attribute' => 'topic',
                    'label' => 'ตัวชี้วัด',
                    'format' => 'raw',
                    'value' => function($data)use ($rep_year) {
                        $params = [
                            'region/changwat', // action
                            'kpi_id' => $data['id'],
                            'rep_year' => $rep_year
                        ];

                        return Html::a($data['topic'], $params);
                    }],
                        [
                            'attribute' => 'target',
                            'label' => 'เป้าหมาย'
                        ],
                        [
                            'attribute' => 'total',
                            'label' => 'ผลงาน'
                        ],
                        [
                            'attribute' => 'ratio',
                            'label' => 'ร้อยละ'
                        ],
                    ]
                ]);
                ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->